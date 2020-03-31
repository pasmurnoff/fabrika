<?php
add_filter('loop_shop_per_page', 'new_loop_shop_per_page', 20);

function new_loop_shop_per_page($cols)
{
    // $cols contains the current number of products per page based on the value stored on Options -> Reading
    // Return the number of products you wanna show per page.
    $cols = 5;
    return $cols;
}

function archive_header_wrapper_top() {
    echo '<div class="archive__top_wrap mrgn15">';
}

function archive_header_wrapper_bottom() {
    echo '</div>';
}

add_action('custom_before_result_count', 'archive_header_wrapper_top');
add_action('custom_after_orderby', 'archive_header_wrapper_bottom');