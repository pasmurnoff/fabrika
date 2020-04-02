<?php
add_filter('loop_shop_per_page', 'new_loop_shop_per_page', 20);

function new_loop_shop_per_page($cols)
{
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 20;
    return $cols;
}

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
