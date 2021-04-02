<?php
/**
 * Use Lozad (lazy loading) for attachments/featured images
 */
add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment) {
    // Bail on admin
    if (is_admin()) {
        return $attr;
    }

    $attr['data-src'] = $attr['src'];
    $attr['class'] .= ' lozad';
    unset($attr['src']);

    return $attr;
}, 10, 2);
