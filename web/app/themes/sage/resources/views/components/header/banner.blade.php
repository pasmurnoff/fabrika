@if(!isset($_COOKIE['topbanner']))
    <div class="topbanner">
        <div class="topbanner__inner">
            <a href="/magazin" class="topbanner__link">
                {!! __('<span class="topbanner__mobilefix">Ограниченное предложение: </span>При заказе от 100 000 рублей скидка 20% <span class="topbanner__button">Перейти в магазин</span>', 'sage') !!}
            </a>
            <div class="topbanner__cross">
                @include('icon::cross')
            </div>
        </div>
    </div>
@endif
