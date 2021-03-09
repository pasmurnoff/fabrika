<?php
function bullshit2()
{
    $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'numberposts' => -1
    );

    $my_query = new WP_Query($args);

    if ($my_query->have_posts()) {

        while ($my_query->have_posts()) : $my_query->the_post();

            $terms = wp_get_post_terms(get_the_ID(), 'product_tag');

            foreach ($terms as $term) {
                $termNames[] = $term->name;
                $taxonomy = 'pa_metki'; // The taxonomy

                $term_name = $term->name; // The term "NAME"
                $term_slug = sanitize_title($term_name); // The term "slug"

// Check if the term exist and if not it create it (and get the term ID).
                if (!term_exists($term_name, $taxonomy)) {
                    $term_data = wp_insert_term($term_name, $taxonomy);
                    $term_id = $term_data['term_id'];
                } else {
                    $term_id = get_term_by('name', $term_name, $taxonomy)->term_id;
                }
                $product = wc_get_product(get_the_ID());
                $attributes = $product->get_attributes();

// 1. If the product attribute is set for the product
                if (array_key_exists($taxonomy, $attributes)) {
                    foreach ($attributes as $key => $attribute) {
                        if ($key == $taxonomy) {
                            $options = (array)$attribute->get_options();
                            $options[] = $term_id;
                            $attribute->set_options($options);
                            $attributes[$key] = $attribute;
                            break;
                        }
                    }
                    $product->set_attributes($attributes);
                } // 2. The product attribute is not set for the product
                else {
                    $attribute = new WC_Product_Attribute();

                    $attribute->set_id(sizeof($attributes) + 1);
                    $attribute->set_name($taxonomy);
                    $attribute->set_options(array($term_id));
                    $attribute->set_position(sizeof($attributes) + 1);
                    $attribute->set_visible(true);
                    $attribute->set_variation(false);
                    $attributes[] = $attribute;

                    $product->set_attributes($attributes);
                }

                $product->save();

// Append the new term in the product
                if (!has_term($term_name, $taxonomy, $product->get_id()))
                    wp_set_object_terms(get_the_ID(), $term_slug, $taxonomy, true);

            }

            wp_set_object_terms(get_the_ID(), $termNames, $taxonomy, true);

        endwhile;
    }

    wp_reset_query();
}

function bullshit1()
{

    $products = get_posts(['post_type' => 'product', 'numberposts' => -1]);
    foreach ($products as $product) {
        $terms = wp_get_post_terms($product->ID, 'product_tag');
        $termNames = [];

        foreach ($terms as $term) {
            $termNames[] = $term->name;
        }

        if (!empty($termNames)) {
            wp_set_object_terms($product->ID, $termNames, 'pa_metki');
        }
    }
}


/************************************************************************\
|**                                                                    **|
|**  Allow WP_Query() search function to look for multiple keywords    **|
|**  in metas in addition to post_title and post_content               **|
|**                                                                    **|
|**  By rAthus @ Arkanite                                              **|
|**  Created: 2020-08-18                                               **|
|**  Updated: 2020-08-19                                               **|
|**                                                                    **|
|**  Just use the usual 's' argument and add a 's_meta_keys' argument  **|
|**  containing an array of the meta(s) key you want to search in :)   **|
|**                                                                    **|
|**  Example :                                                         **|
|**                                                                    **|
|**  $args = array(                                                    **|
|**      'numberposts'  => -1,                                         **|
|**      'post_type' => 'post',                                        **|
|**      's' => $MY_SEARCH_STRING,                                     **|
|**      's_meta_keys' => array('META_KEY_1','META_KEY_2');            **|
|**      'orderby' => 'date',                                          **|
|**      'order'   => 'DESC',                                          **|
|**  );                                                                **|
|**  $posts = new WP_Query($args);                                     **|
|**                                                                    **|
\************************************************************************/
add_action('pre_get_posts', 'my_search_query'); // add the special search fonction on each get_posts query (this includes WP_Query())
function my_search_query($query) {
    if ($query->is_search() and $query->query_vars and $query->query_vars['s'] and $query->query_vars['s_meta_keys']) { // if we are searching using the 's' argument and added a 's_meta_keys' argument
        global $wpdb;
        $search = $query->query_vars['s']; // get the search string
        $ids = array(); // initiate array of martching post ids per searched keyword
        foreach (explode(' ',$search) as $term) { // explode keywords and look for matching results for each
            $term = trim($term); // remove unnecessary spaces
            if (!empty($term)) { // check the the keyword is not empty
                $query_posts = $wpdb->prepare("SELECT * FROM {$wpdb->posts} WHERE post_status='publish' AND ((post_title LIKE '%%%s%%') OR (post_content LIKE '%%%s%%'))", $term, $term); // search in title and content like the normal function does
                $ids_posts = [];
                $results = $wpdb->get_results($query_posts);
                if ($wpdb->last_error)
                    die($wpdb->last_error);
                foreach ($results as $result)
                    $ids_posts[] = $result->ID; // gather matching post ids
                $query_meta = [];
                foreach($query->query_vars['s_meta_keys'] as $meta_key) // now construct a search query the search in each desired meta key
                    $query_meta[] = $wpdb->prepare("meta_key='%s' AND meta_value LIKE '%%%s%%'", $meta_key, $term);
                $query_metas = $wpdb->prepare("SELECT * FROM {$wpdb->postmeta} WHERE ((".implode(') OR (',$query_meta)."))");
                $ids_metas = [];
                $results = $wpdb->get_results($query_metas);
                if ($wpdb->last_error)
                    die($wpdb->last_error);
                foreach ($results as $result)
                    $ids_metas[] = $result->post_id; // gather matching post ids
                $merged = array_merge($ids_posts,$ids_metas); // merge the title, content and meta ids resulting from both queries
                $unique = array_unique($merged); // remove duplicates
                if (!$unique)
                    $unique = array(0); // if no result, add a "0" id otherwise all posts wil lbe returned
                $ids[] = $unique; // add array of matching ids into the main array
            }
        }
        if (count($ids)>1)
            $intersected = call_user_func_array('array_intersect',$ids); // if several keywords keep only ids that are found in all keywords' matching arrays
        else
            $intersected = $ids[0]; // otherwise keep the single matching ids array
        $unique = array_unique($intersected); // remove duplicates
        if (!$unique)
            $unique = array(0); // if no result, add a "0" id otherwise all posts wil lbe returned
        unset($query->query_vars['s']); // unset normal search query
        $query->set('post__in',$unique); // add a filter by post id instead
    }
}
