<div class="main-sidebar sidebar">
    <div class="main-sidebar__wrap">
        @php wc_get_template('product-searchform'); @endphp
        @if (has_nav_menu('main_navigation'))
            {!! wp_nav_menu(['theme_location' => 'main_navigation', 'menu_class' => 'menu-sidebar menu' , 'walker' => new Custom_Walker_Nav_Menu() ]) !!}
        @endif
    </div>
    @include('components.panel.wrap')
</div>