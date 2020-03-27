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
add_action('woocommerce_after_single_product_summary', 'customAfterSingleProductSummary');