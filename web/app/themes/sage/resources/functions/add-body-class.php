<?php
add_filter('body_class', 'add_custom_body_class');

function add_custom_body_class($classes)
{
    if (is_shop() or is_product_category()) {
        $classes[] = 'woo-product-catalog';
    }
    return $classes;
}
