<?php

/** Remove slug from city CPT */
function na_remove_slug($post_link, $post, $leavename)
{
    if ('city' != $post->post_type || 'publish' != $post->post_status) {
        return $post_link;
    }
    $post_link = str_replace('/' . $post->post_type . '/', '/', $post_link);
    return $post_link;
}

add_filter('post_type_link', 'na_remove_slug', 10, 3);

function na_parse_request($query)
{
    if (!$query->is_main_query() || 2 != count($query->query) || !isset($query->query['page'])) {
        return;
    }
    if (!empty($query->query['name'])) {
        $query->set('post_type', array('post', 'city', 'page'));
    }
}

add_action('pre_get_posts', 'na_parse_request');

/** Remove slug from woocommerce category */
