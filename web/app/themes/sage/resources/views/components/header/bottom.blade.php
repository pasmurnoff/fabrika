<div class="header__bottom">
    @include('common.logo')

    @if (has_nav_menu('main_navigation'))
        {!! wp_nav_menu(['theme_location' => 'main_navigation', 'menu_class' => 'menu-navigation menu menu_inline' , 'walker' => new Custom_Walker_Nav_Menu() ]) !!}
    @endif

    @include('components.panel.wrap')
</div>
{{--<div class="hover-submenu">--}}

{{--</div>--}}