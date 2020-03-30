<?php
/* count into product page */
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args($args)
{
    $args['posts_per_page'] = 12;
    $args['columns'] = 6;
    return $args;
}


/* count into archive page */
add_filter('loop_shop_columns', 'custom_count_loop_shop_per_page');

function custom_count_loop_shop_per_page($cols)
{
    if (is_archive()) {
        $cols = 5;
        return $cols;
    }
}