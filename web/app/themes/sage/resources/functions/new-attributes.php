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
