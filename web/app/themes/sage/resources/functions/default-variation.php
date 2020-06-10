<?php
add_action( 'template_redirect', 'set_default_variation_job' );
function set_default_variation_job() {
    if ( ! is_product() || is_admin() ) return;

    global $wpdb, $post;

    // Get an instance of the WC_Product object
    $product = wc_get_product($post->ID);
    $product_id = $post->ID;

    // Check if default variation has been updated, if yes we exit
    if( get_post_meta( $product_id, '_default_variation_updated', true ) ) return;

    // Only for variable products
    if ( $product->is_type( 'variable' ) ) {

        $max_price = $product->get_variation_price('max', true); // Get Max variation price

        // SQL Query: Get the variation ID of the  max variation price
        $result = $wpdb->get_col("
            SELECT pm.post_id FROM {$wpdb->prefix}postmeta as pm
            INNER JOIN {$wpdb->prefix}posts as p ON pm.post_id = p.ID
            WHERE p.post_type LIKE 'product_variation' AND p.post_parent = $product_id
            AND pm.meta_key LIKE '_price' and pm.meta_value = $max_price
        ");
        $variation_id= reset($result); // get the first variation ID as a string

        // Get an instance of the WC_Product_Variation object
        $variation = wc_get_product($variation_id);
        $default_attributes = array();

        // Loop through this variation attributes and format them
        foreach( $variation->get_variation_attributes() as $key => $value ){
            $taxonomy = str_replace( 'attribute_', '', $key );
            $default_attributes[ $taxonomy ] = $value;
        }

        // Set the default variation attributes in the Variable product
        $product->set_default_attributes( $default_attributes );
        // Set a meta data flag to avoid update repetitions
        update_post_meta( $product_id, '_default_variation_updated', '1' );
        $product->save(); // Save the data
    }
}
