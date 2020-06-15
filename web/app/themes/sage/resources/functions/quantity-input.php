<?php
/**
 * Adjust the quantity input values
 */
add_filter('woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2); // Simple products

function jk_woocommerce_quantity_input_args($args, $product)
{
    $args['input_value'] = 1000;    // Starting value (we only want to affect product pages, not cart)
    $args['max_value'] = -1;    // Maximum value
    $args['min_value'] = 1000;    // Minimum value
    $args['step'] = 100;    // Quantity steps
    return $args;
}

add_filter('woocommerce_available_variation', 'jk_woocommerce_available_variation'); // Variations

function jk_woocommerce_available_variation($args)
{
    $args['max_qty'] = 1000000;        // Maximum value (variations)
    $args['min_qty'] = 1000;    // Minimum value (variations)
    return $args;
}