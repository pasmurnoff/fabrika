<?php
function customBeforeSingleProductSummary()
{
    echo '<div class="product__wrapper">';
}

function customAfterSingleProductSummary()
{
    echo '</div>';
}

add_action('woocommerce_before_single_product_summary', 'customBeforeSingleProductSummary');
add_action('custom_woocommerce_after_summary', 'customAfterSingleProductSummary');

function beforeShopLoopItemTitle()
{
    echo '<div class="woocommerce-loop-product__wrapper">';
}

function afterShopLoopItem()
{
    echo '</div>';
}

add_action('woocommerce_before_shop_loop_item_title', 'beforeShopLoopItemTitle');
add_action('woocommerce_after_shop_loop_item_title', 'afterShopLoopItem');