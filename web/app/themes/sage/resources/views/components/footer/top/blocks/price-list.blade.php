<div class="title footer__title mrgn15-bottom">Прайс-листы</div>
<ul class="menu footer__menu">
    @php
        priceListLinks(['xlsx'=>'Microsoft Excel','zip'=>'Zip-архив','pdf'=>'PDF'], 'menu__item footer__li', 'menu__link menu__link_grey footer__link');
    @endphp
</ul>

