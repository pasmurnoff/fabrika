@if(!isset($_COOKIE['topbanner']))
    @php
        $link_text = pll__('Ограниченное предложение: При заказе от 100 000 рублей скидка 20% [Перейти в магазин]');
        $link_text = str_replace('[', '<span class="topbanner__button">', $link_text);
        $link_text = str_replace(']', '</span>', $link_text);
    @endphp
    <div class="topbanner">
        <div class="topbanner__inner">
            <a href="/magazin" class="topbanner__link">
                {!! $link_text !!}
            </a>
            <div class="topbanner__cross">
                @include('icon::cross')
            </div>
        </div>
    </div>
@endif
