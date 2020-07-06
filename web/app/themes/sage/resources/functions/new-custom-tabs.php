<?php
add_filter('woocommerce_product_tabs', 'woo_new_product_tab');
function woo_new_product_tab($tabs)
{
    $tabs['product_sizes'] = array(
        'title' => __('Таблица размеров', 'woocommerce'),
        'priority' => 20,
        'callback' => 'woo_product_sizes_table_output'
    );

    return $tabs;

}

function woo_product_sizes_table_output()
{
    tableProductSizes();
}

