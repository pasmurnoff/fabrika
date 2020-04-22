<div class="footer__header-wrapper">
    <div class="footer__header">
        @include('common.logo' , ['class'=> 'footer__header-logo'])

        @if (has_nav_menu('main_navigation'))
            {!! wp_nav_menu(['theme_location' => 'main_navigation', 'menu_class' => 'footer__header_menu menu menu_inline' , 'walker' => new Custom_Walker_Nav_Menu() ]) !!}
        @endif

        <div class="footer__phone">
            <a href="tel:+78004441156" class="title title_large ">+7 800 444 11 56</a>
            <p class="text text_bold">Для звонков по России</p>
        </div>
    </div>
</div>