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
            @include('common.phone', ['class' => 'title title_large footer__phone-item'])
            <p class="text footer__header_text">{{ __('Для бесплатных звонков по России', 'sage') }}</p>
        </div>
    </div>
</div>