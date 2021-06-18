<?php
add_action('init', 'register_review');

function register_review()
{
    register_post_type('review', [
        'label' => null,
        'labels' => [
            'name' => 'Отзывы', // основное название для типа записи
            'singular_name' => 'Отзыв', // название для одной записи этого типа
            'add_new' => 'Добавить отзыв', // для добавления новой записи
            'add_new_item' => 'Добавить отзыв', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактировать отзыв', // для редактирования типа записи
            'new_item' => 'New review', // текст новой записи
            'view_item' => 'Просмотреть отзыв', // для просмотра записи этого типа.
            'search_items' => 'Search for review', // для поиска по этим типам записи
            'not_found' => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash can', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Отзывы', // название меню
        ],
        //'publicly_queryable' => false,
        'exclude_from_search' => false,
        'show_in_nav_menus' => false,
        'supports' => ['title', 'editor', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'description' => '',
        'public' => true,
        'show_in_menu' => null,
        'show_in_rest' => null,
        'rest_base' => null,
        'menu_position' => null,
        'menu_icon' => 'dashicons-star-filled',
        'hierarchical' => false,
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
}
