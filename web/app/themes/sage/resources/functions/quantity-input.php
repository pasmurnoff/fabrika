<?php
/**
 * Adjust the quantity input values
 */
add_filter('woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2); // Simple products

function jk_woocommerce_quantity_input_args($args, $product)
{
    if (is_single() or is_cart()) {
        $args['input_value'] = 2;    // Starting value (we only want to affect product pages, not cart)
    }
    $args['min_value'] = 1000;    // Minimum value
    $args['step'] = 100;    // Quantity steps
    return $args;
}
