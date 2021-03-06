<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('sage/main.css', asset_path('styles/main.css'), false, null);
    wp_enqueue_script('sage/main.js', asset_path('scripts/main.js'), ['jquery'], null, true);

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    if (is_single()) {
        wp_enqueue_script('share2', 'https://yastatic.net/share2/share.js');
    }
}, 100);

/**
 * Theme setup
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil-clean-up');
    add_theme_support('soil-jquery-cdn');
    add_theme_support('soil-nav-walker');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'main_navigation' => __('Main navigation', 'sage'),
        'header_top' => __('header -> top', 'sage'),
        'footer_top_1' => __('footer -> help', 'sage'),
        'footer_top_2' => __('footer -> categories', 'sage'),
        'footer_top_3' => __('footer -> for partners', 'sage'),
        'footer_top_4' => __('footer -> for staff', 'sage'),
        'footer_bottom_1' => __('footer -> bottom 1', 'sage'),
        'footer_bottom_2' => __('footer -> bottom 2', 'sage'),
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable HTML5 markup support-modal
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Use main stylesheet for visual editor
     * @see resources/assets/styles/layouts/_tinymce.scss
     */
    add_editor_style(asset_path('styles/main.css'));
}, 20);

/**
 * Register sidebars
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="mrgn35-bottom filter-sidebar__item %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="title title_middle">',
        'after_title' => '</h3>'
    ];
    register_sidebar([
            'name' => __('Filter', 'sage'),
            'id' => 'filter-sidebar'
        ] + $config);

    register_sidebar([
        'name' => __('Tags', 'sage'),
        'id' => 'tags-cloud',
        'class' => 'tags',
        'before_widget' => '<div class="tags-cloud">',
        'after_widget' => '</div>',

    ]);

    register_sidebar([
        'name' => __('Mini-cart', 'sage'),
        'id' => 'cart-sidebar',
        'before_widget' => '<div class="mini-cart %1$s %2$s"><div class="mini-cart__top">
<div class="mini-cart__cross closeminicart" data-minicart="mini-cart"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"
     class="mini-cart__icon">
    <g fill="none" fill-rule="evenodd">
        <path d="M0 0h24v24H0z"></path>
        <path d="M12 10.587l6.293-6.294a1 1 0 111.414 1.414l-6.293 6.295 6.293 6.294a1 1 0 11-1.414 1.414L12 13.416 5.707 19.71a1 1 0 01-1.414-1.414l6.293-6.294-6.293-6.295a1 1 0 011.414-1.414L12 10.587z"
              fill="currentColor" fill-rule="nonzero"></path>
    </g>
</svg></div>
<div class="mini-cart__title-wrap">
<h3 class="title title_middle">??????????????</h3>
</div>
</div>',
        'after_widget' => '</div>',
    ]);
});

/**
 * Register custom types
 */

register_post_type('city', [
    'label' => null,
    'labels' => [
        'name' => '???????????????? ????????????',
        'singular_name' => 'C?????????????? ????????????',
        'add_new' => '???????????????? ???????????????? ????????????',
        'add_new_item' => '???????????????????? ???????????????? ????????????',
        'edit_item' => '???????????????????????????? ???????????????? ????????????',
        'new_item' => '?????????? ???????????????? ????????????',
        'view_item' => '???????????????? ???????????????? ????????????',
        'search_items' => '???????????? ???????????????? ????????????',
        'not_found' => '???? ??????????????',
        'not_found_in_trash' => '???? ?????????????? ?? ??????????????',
        'parent_item_colon' => '',
        'menu_name' => '????????????',
    ],
    'description' => '',
    'public' => true,
    'show_in_menu' => null,
    'show_in_rest' => null,
    'rest_base' => null,
    'menu_position' => null,
    'menu_icon' => 'dashicons-admin-site-alt2',
    'hierarchical' => false,
    'has_archive' => false,
    'query_var' => true,
]);

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action('the_post', function ($post) {
    sage('blade')->share('post', $post);
});

/**
 * Setup Sage options
 */
add_action('after_setup_theme', function () {
    /**
     * Add JsonManifest to Sage container
     */
    sage()->singleton('sage.assets', function () {
        return new JsonManifest(config('assets.manifest'), config('assets.uri'));
    });

    /**
     * Add Blade to Sage container
     */
    sage()->singleton('sage.blade', function (Container $app) {
        $cachePath = config('view.compiled');
        if (!file_exists($cachePath)) {
            wp_mkdir_p($cachePath);
        }
        (new BladeProvider($app))->register();
        return new Blade($app['view']);
    });

    /**
     * Create @asset() Blade directive
     */
    sage('blade')->compiler()->directive('asset', function ($asset) {
        return "<?= " . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
    });

    /**
     * ???????????????????? ?????????????? ????????
     */
    load_theme_textdomain('sage', get_template_directory() . '/lang');
});
