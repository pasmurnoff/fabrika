<?php
/**
 * Remove Gutenberg
 */

add_filter('use_block_editor_for_post', '__return_false', 10);

//remove woocommerce styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');


/* remove specific woo styles */
function wpex_remove_woo_styles($styles)
{
    unset($styles['woocommerce-general']);
    unset($styles['woocommerce-layout']);
    unset($styles['woocommerce-smallscreen']);
    return $styles;
}

add_filter('woocommerce_enqueue_styles', 'wpex_remove_woo_styles');

/* remove woocommerce titles */
add_filter('woocommerce_show_page_title', '__return_false');

// Отключаем emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

/* Remove woo breadcrumbs */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

/* Remove button from product card */
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

/* remove responsive wishlist */
// add_action('yith_wcwl_is_wishlist_responsive', '__return_false');

/* remove add to cart message */
add_filter( 'wc_add_to_cart_message_html', '__return_null' );

// Отключаем лишние css и js
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);
function my_deregister_scripts()
{
    wp_dequeue_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');
