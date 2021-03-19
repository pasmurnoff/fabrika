<div class="title footer__title mrgn15-bottom">Прайс-листы</div>
<ul class="menu footer__menu">
    <li class="menu__item footer__li">
        @php
          priceListLink('xlsx', 'Microsoft Excel', 'menu__link menu__link_grey footer__link');
        @endphp
    </li>
    <li class="menu__item footer__li">
        @php
          priceListLink('zip', 'Zip-архив', 'menu__link menu__link_grey footer__link');
        @endphp
    </li>
    <li class="menu__item footer__li">
        @php
            priceListLink('pdf', 'PDF', 'menu__link menu__link_grey footer__link');
        @endphp
    </li>
</ul>
