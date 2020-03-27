<?php
/* Add woocommerce support */
add_action('after_setup_theme', function () {
    add_theme_support('woocommerce');
});


/* woo gallery support */
add_theme_support('wc-product-gallery-slider');
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
