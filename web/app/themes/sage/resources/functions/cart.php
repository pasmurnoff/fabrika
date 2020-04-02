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
