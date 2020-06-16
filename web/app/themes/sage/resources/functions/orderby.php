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
    $options['price'] = 'По цене &nbsp; &#8593;'; // rename
    $options['price-desc'] = 'По цене &nbsp; &#8595;'; // rename
    $options['popularity'] = 'По популярности'; // rename
    $options['rating'] = 'По рейтингу'; // rename
    $options['date'] = 'По дате'; // rename

    return $options;

}