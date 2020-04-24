<div class="footer__header-wrapper">
    <div class="footer__header container">
        <div class="footer__header_left">
            @include('common.logo' , ['class'=> 'footer__header-logo'])

            @if (has_nav_menu('main_navigation'))
                {!! wp_nav_menu(
            [
                'theme_location' => 'main_navigation',
                'menu_class' => 'footer__header_menu menu menu_inline',
                'walker' => new Custom_Walker_Nav_Menu(),
                'depth' => 1

              ]) !!}
            @endif
        </div>
        <div class="footer__phone footer__header_right">
            <a href="tel:+78004441156" class="title title_large footer__phone-item">8 800 444 11 56</a>
            <p class="text footer__header_text">Для звонков по России</p>
        </div>
    </div>
</div>