<?php
/*add_filter('woocommerce_product_tabs', 'woo_new_product_tab');*/
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
    echo tableProductSizes();
}

// Remove Empty Tabs
add_filter('woocommerce_product_tabs', 'yikes_woo_remove_empty_tabs', 20, 1);

function yikes_woo_remove_empty_tabs($tabs)
{

    if (!tableProductSizes())
        unset($tabs['product_sizes']);

    return $tabs;
}

