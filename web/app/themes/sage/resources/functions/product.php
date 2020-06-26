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
