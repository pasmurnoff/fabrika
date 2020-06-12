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


function beforeImgWrapper()
{
    echo '<div class="product__img-wrap">';
}

add_action('woocommerce_before_shop_loop_item', 'beforeImgWrapper');


function beforeShopLoopItemTitle()
{
    echo product_tools() . '</div><div class="woocommerce-loop-product__wrapper">' . get_product_colors();
}

function afterShopLoopItem()
{
    global $product;
    $inStock = $product->is_in_stock();
    if (isset($inStock) && $inStock)
        echo '<div class="product__instock">В наличии</div></div>';
    else
        echo '<div class="product__instock product__instock_off">На заказ</div></div>';
}

add_action('woocommerce_before_shop_loop_item_title', 'beforeShopLoopItemTitle');
add_action('woocommerce_after_shop_loop_item_title', 'afterShopLoopItem');




add_filter('wp_get_attachment_image_attributes', 'change_attachement_image_attributes', 20, 2);

function change_attachement_image_attributes( $attr, $attachment ){
    // Get post parent
    $parent = get_post_field( 'post_parent', $attachment);

    // Get post type to check if it's product
    $type = get_post_field( 'post_type', $parent);
    if( $type != 'product' ){
        return $attr;
    }

    /// Get title
    $title = get_post_field( 'post_title', $parent);

    $attr['alt'] = $title;
    $attr['title'] = $title;

    return $attr;
}
