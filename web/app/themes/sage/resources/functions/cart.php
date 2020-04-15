<?php
// hide coupon field on cart page

function hide_coupon_field_on_cart($enabled)
{
    if (is_cart()) {
        $enabled = false;
    }
    return $enabled;
}

add_filter('woocommerce_coupons_enabled', 'hide_coupon_field_on_cart');

if (is_cart() || is_checkout()) {
    add_filter('woocommerce_show_page_title', '__return_false');
}


/* refresh product count in cart */

add_filter('woocommerce_add_to_cart_fragments', 'refresh_cart_count_fragments', 10, 1);

function refresh_cart_count_fragments($fragments)
{
    $fragments['.cart-counter'] = '<div class="cart-counter">' . WC()->cart->get_cart_contents_count() . '</div>';

    return $fragments;
}