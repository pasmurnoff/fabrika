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
    $options['price'] = pll__('По цене') . ' &nbsp; &#8593;'; // rename
    $options['price-desc'] = pll__('По цене') . ' &nbsp; &#8595;'; // rename
    $options['popularity'] = pll__('По популярности'); // rename
    $options['rating'] = pll__('По рейтингу'); // rename
    $options['date'] = pll__('По дате'); // rename

    return $options;
}
