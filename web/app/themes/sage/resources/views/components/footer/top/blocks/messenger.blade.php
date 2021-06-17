<div class="footer-messenger">
    <div class="footer-messenger__wrap container">
        <div class="footer-messenger__msg text text_large text_black">
            <div class="footer-messenger__text">{{ pll__('У вас остались вопросы? Звоните') }}:</div>
            @include('common.phone', ['class' => 'footer-messenger__text footer-messenger__phone text_link text_bold'])
        </div>
        <div class="footer-messenger__icons-wrap">
            <div class="text text_bold text_middle">{!! pll__('Ответим на ваши вопросы в мессенджерах') !!}</div>
            <div class="footer-messenger__icons">
                <a href="viber://chat?number=79274519036"
                   target="_blank"
                   class="footer-messenger__icon footer-messenger__icon_viber">@include('icon::social.viber')</a>
                <a href="tg://resolve?domain=fabrikanoskov_sotrudnik"
                   target="_blank"
                   class="footer-messenger__icon footer-messenger__icon_telegram">@include('icon::social.telegram')</a>
                <a href="https://wa.me/79274519036"
                   target="_blank"
                   class="footer-messenger__icon footer-messenger__icon_whatsapp">@include('icon::social.whatsapp')</a>
            </div>
        </div>
    </div>
</div>