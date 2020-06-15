<?php
if (defined('YITH_WCWL') && !function_exists('yith_wcwl_ajax_update_count')) {
    function yith_wcwl_ajax_update_count()
    {
        wp_send_json(array(
            'count' => yith_wcwl_count_all_products()
        ));
    }

    add_action('wp_ajax_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count');
    add_action('wp_ajax_nopriv_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count');
}


function filter_yith_wcwl_wishlist_view_name_heading($var)
{
    return __('Product name', 'woocommerce');
}

add_filter('yith_wcwl_wishlist_view_name_heading', 'filter_yith_wcwl_wishlist_view_name_heading', 10, 1);


function filter_yith_wcwl_wishlist_view_price_heading($var)
{
    return __('Price', 'woocommerce');
}

add_filter('yith_wcwl_wishlist_view_price_heading', 'filter_yith_wcwl_wishlist_view_price_heading', 10, 1);


function filter_yith_wcwl_wishlist_view_quantity_heading($var)
{
    return __('Status', 'woocommerce');
}

add_filter('yith_wcwl_wishlist_view_stock_heading', 'filter_yith_wcwl_wishlist_view_quantity_heading', 10, 1);


function filter_yith_wcwl_wishlist_view_out_of_stock($var)
{
    return __('Out of stock', 'woocommerce');
}

add_filter('yith_wcwl_out_of_stock_label', 'filter_yith_wcwl_wishlist_view_out_of_stock', 10, 1);


