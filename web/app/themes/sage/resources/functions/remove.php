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
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
