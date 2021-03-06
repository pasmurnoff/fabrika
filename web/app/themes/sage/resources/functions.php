<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__ . '/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ????????? STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * ????????? TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__) . '/config/assets.php',
            'theme' => require dirname(__DIR__) . '/config/theme.php',
            'view' => require dirname(__DIR__) . '/config/view.php',
        ]);
    }, true);

/**
 * Add Class to li in menu
 * @param $classes
 * @param $item
 * @return array
 *
 */
function my_special_nav_class($classes, $item)
{
    $classes[] = 'menu__item menu__item_main';

    return $classes;
}

add_filter('nav_menu_css_class', 'my_special_nav_class', 10, 2);


/**
 * Add class to a in menu
 */
function add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'primary_navigation') {
        // add the desired attributes:
        $atts['class'] = 'menu__link menu__link_bold menu__link_main';
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);

/**
 * Custom functions
 */

/* js variables */
require dirname(__DIR__) . '/resources/functions/js_vars.php';

/* add custom functions */
require dirname(__DIR__) . '/resources/functions/remove.php';
require dirname(__DIR__ . '/resources') . '/functions/bem-menu.php';
require dirname(__DIR__ . '/resources') . '/functions/lazy-load.php';

/* add custom functions */
require dirname(__DIR__) . '/resources/functions/support.php';

/* add product functions */
require dirname(__DIR__) . '/resources/functions/product.php';

/* ???????????????? ???????????? */
require dirname(__DIR__) . '/resources/functions/change-rub.php';

/* ???????????????? ???????????????????? ?????????????? ?? ???????????? ?????????????? */
require dirname(__DIR__) . '/resources/functions/archive.php';

/* ?????????????????????? ???????????? */
require dirname(__DIR__) . '/resources/functions/language-strings.php';

/* ?????????????????? ???????????? ???? ???????????? ???????????????? */
require dirname(__DIR__) . '/resources/functions/generation-phone-link.php';

/* ?????????????????? ???????????? ???????????? ?? body */
require dirname(__DIR__) . '/resources/functions/add-body-class.php';

add_action('wp_enqueue_scripts', 'add_custom_dropdown');
function add_custom_dropdown()
{
    wp_enqueue_script('selectWoo');
}

/* cart and checkout */
/* ???????????????? ???????????????????? ?????????????? ?? ???????????? ?????????????? */
require_once dirname(__DIR__) . '/resources/functions/cart.php';
require_once dirname(__DIR__) . '/resources/functions/checkout.php';

/* mini-cart */
require_once dirname(__DIR__) . '/resources/functions/mini-cart.php';
/* wishlist */
//require_once dirname(__DIR__) . '/resources/functions/wishlist.php';

/* Custom walker nav menu */
require_once dirname(__DIR__) . '/resources/functions/WalkerMenu.php';
/* account */
require_once dirname(__DIR__) . '/resources/functions/account.php';

/* quantity input */
require_once dirname(__DIR__) . '/resources/functions/quantity-input.php';


/**
 * Product relationship field - include searching SKU
 *
 * @param Array $args
 * @param Array $field
 * @param Integer $post_id
 *
 * @return $args
 */
function prefix_product_relationship_query_mods($args, $field, $post_id)
{

    $args['post_status'] = 'publish';

    if (!empty($args['s'])) {

        $args['meta_query'] = array(array(
            'key' => '_sku',
            'value' => $args['s'],
            'compare' => 'LIKE',
        ));

    }

    return $args;

}

add_filter('acf/fields/relationship/query/name=field_name', 'prefix_product_relationship_query_mods', 10, 3);


/* search ajax */
require_once dirname(__DIR__) . '/resources/functions/search.php';

/* product views */
require_once dirname(__DIR__) . '/resources/functions/product-views.php';

/* ajax wp_mail */
require_once dirname(__DIR__) . '/resources/functions/ajax_wp.php';
require_once dirname(__DIR__) . '/resources/functions/ajax-review.php';

/* Remove slug from cities, products, and woo_categories */
require_once dirname(__DIR__) . '/resources/functions/remove-slugs.php';

/* Set default variation for all Products */
require_once dirname(__DIR__) . '/resources/functions/default-variation.php';

/* Custom field for woocommerce product */
require_once dirname(__DIR__) . '/resources/functions/woo-custom-field.php';

/* Add last modified for all pages */
require_once dirname(__DIR__) . '/resources/functions/register-post-type-review.php';
require_once dirname(__DIR__) . '/resources/functions/last-modified.php';
require_once dirname(__DIR__) . '/resources/functions/breadcrumb-separator.php';
require_once dirname(__DIR__) . '/resources/functions/coupon.php';
require_once dirname(__DIR__) . '/resources/functions/add-to-cart-text.php';
require_once dirname(__DIR__) . '/resources/functions/orderby.php';
require_once dirname(__DIR__) . '/resources/functions/read-timing.php';
require_once dirname(__DIR__) . '/resources/functions/rating.php';
require_once dirname(__DIR__) . '/resources/functions/comment.php';
require_once dirname(__DIR__) . '/resources/functions/new-custom-tabs.php';
require_once dirname(__DIR__) . '/resources/functions/productSizeTable.php';
require_once dirname(__DIR__) . '/resources/functions/new-attributes.php';
require_once dirname(__DIR__) . '/resources/functions/wishlist/init.php';
require_once dirname(__DIR__) . '/resources/functions/price-list/init.php';
require_once dirname(__DIR__) . '/resources/functions/product-generate-pdf.php';
require_once dirname(__DIR__) . '/resources/functions/cron/init.php';