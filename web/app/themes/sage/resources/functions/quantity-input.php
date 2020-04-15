<?php
/**
 * Adjust the quantity input values
 */
add_filter('woocommerce_quantity_input_args', 'bloomer_woocommerce_quantity_changes', 10, 2);

function bloomer_woocommerce_quantity_changes($args, $product)
{

    if (!is_cart()) {

        $args['input_value'] = 1000; // Start from this value (default = 1)
        $args['max_value'] = -1; // Max quantity (default = -1)
        $args['min_value'] = 1000; // Min quantity (default = 0)
        $args['step'] = 100; // Increment/decrement by this value (default = 1)

    } else {

        // Cart's "min_value" is already 0 and we don't need "input_value"
        $args['max_value'] = -1; // Max quantity (default = -1)
        $args['step'] = 100; // Increment/decrement by this value (default = 0)
        $args['min_value'] = 1000; // Min quantity (default = 0)

    }

    return $args;

}