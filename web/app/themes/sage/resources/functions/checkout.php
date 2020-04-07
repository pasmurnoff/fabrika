<?php

function custom_billing_before_wrapper()
{
    echo '<div class="checkout-billing__wrapper">';
}

function custom__billing_after_wrapper()
{
    echo '</div>';
}

add_action('woocommerce_before_checkout_billing_form', 'custom_billing_before_wrapper');
add_action('woocommerce_after_checkout_billing_form', 'custom__billing_after_wrapper');

add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields');

function addBootstrapToCheckoutFields($fields)
{
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            /* $field['class'][] = 'labelwrap';*/

            // add form-control to the actual input
            $field['input_class'][] = 'input';
            $field['label_class'] = array('checkout__label');
        }
    }
    return $fields;
}