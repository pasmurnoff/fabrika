<?php
/* Обернем сортировку и вывод количества страниц */
function archive_header_wrapper_top()
{
    echo '<div class="archive__top_wrap mrgn15-bottom">';
}

function archive_header_wrapper_bottom()
{
    echo '</div>';
}

add_action('custom_before_result_count', 'archive_header_wrapper_top');
add_action('custom_after_orderby', 'archive_header_wrapper_bottom');

/* Обернем весь контент страницы */
function archive_before_content_wrapper()
{
    echo '<div class="archive__wrapper">';
}

function archive_after_content_wrapper()
{
    echo '</div>';
}

add_action('woocommerce_after_shop_loop', 'archive_after_content_wrapper');
add_action('custom_woocommerce_before_sidebar', 'archive_before_content_wrapper');


/* Remove count in filter */

add_filter('woocommerce_layered_nav_count', 'woo_remove_category_products_count');

function woo_remove_category_products_count()
{
    return;
}

add_filter('get_the_archive_title', function ($title) {
    $postfix = 'оптом';
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false)) . ' ' . $postfix;
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});