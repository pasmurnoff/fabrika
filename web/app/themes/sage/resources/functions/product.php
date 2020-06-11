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

function product_tools()
{
    global $product;
    $inStock = $product->is_in_stock();
    echo '<div class="product__tools">' . do_shortcode('[yith_wcwl_add_to_wishlist]') . do_shortcode('[yith_quick_view type="icon"]') . '</div>';
    if (isset($inStock) && $inStock)
        echo '<div class="product__instock"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g>
                            <polygon points="25.089,66.201 20.882,62.01 17.557,65.331 25.089,72.837 34.234,63.713 30.911,60.392  "/>
                            <path d="M53.243,12.275L16.485,28.803v24.239C12.563,55.934,10,60.561,10,65.789c0,8.74,7.133,15.849,15.897,15.849   c3.091,0,5.971-0.901,8.412-2.429l18.934,8.516L90,71.193v-42.39L53.243,12.275z M53.243,17.422l25.312,11.381L53.243,40.188   L27.93,28.803L53.243,17.422z M25.897,76.946c-6.172,0-11.193-5.007-11.193-11.157c0-6.155,5.021-11.162,11.193-11.162   c6.174,0,11.195,5.007,11.195,11.162C37.093,71.939,32.071,76.946,25.897,76.946z M85.295,68.164L53.243,82.579l-15.049-6.767   c2.252-2.731,3.599-6.226,3.599-10.023c0-8.744-7.129-15.853-15.896-15.853c-1.636,0-3.222,0.248-4.708,0.711V30.918l32.054,14.417   l32.052-14.417V68.164z"/>
                            </g>
                    </svg></div>';

}

add_action('woocommerce_after_shop_loop_item_title', 'product_tools', 999);


add_filter('wp_get_attachment_image_attributes', 'change_attachement_image_attributes', 20, 2);
function change_attachement_image_attributes($attr, $attachment)
{
// Get post parent
    $parent = get_post_field('post_parent', $attachment);

// Get post type to check if it's product
    $type = get_post_field('post_type', $parent);
    if ($type != 'product') {
        return $attr;
    }

/// Get title
    $title = get_post_field('post_title', $parent);

    if ($attr['alt'] == '') {
        $attr['alt'] = $title;
        $attr['title'] = $title;
    }

    return $attr;
}
