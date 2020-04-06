<div class="main-sidebar sidebar">
    <div class="main-sidebar__wrap">
        @if (has_nav_menu('main_navigation'))
            {!! wp_nav_menu(['theme_location' => 'main_navigation', 'menu_class' => 'menu-sidebar menu menu_inline' , 'walker' => new Custom_Walker_Nav_Menu() ]) !!}
        @endif
    </div>
</div>