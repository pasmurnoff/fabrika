<?php
add_filter('woocommerce_catalog_orderby', 'rename_default_sorting_option');
function rename_default_sorting_option($options)
{

    unset($options['menu_order']); // remove
    unset($options['price']); // remove
    unset($options['price-desc']); // remove
    unset($options['popularity']); // remove
    unset($options['rating']);
    unset($options['date']); // remove
    $options['price'] = __('По цене', 'sage') . ' &nbsp; &#8593;'; // rename
    $options['price-desc'] = __('По цене', 'sage') . ' &nbsp; &#8595;'; // rename
    $options['popularity'] = __('По популярности', 'sage'); // rename
    $options['rating'] = __('По рейтингу', 'sage'); // rename
    $options['date'] = __('По дате', 'sage'); // rename

    return $options;

}