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