@component('components.banner.banner', ['classes' => 'banner__order banner_bg mrgn35', 'title' => 'Носки на заказ с Вашим дизайном от 35 рублей', 'href' => '/konstruktor-zakaza-noskov', 'buttonText' => 'Заказать носки' ])
    @slot('text')
        <ul class="banner__order-list">
            <li class="banner__order-item">Носки для магазинов шоурумов</li>
            <li class="banner__order-item">Носки с логотипами компаний</li>
            <li class="banner__order-item">Носки для промо акций</li>
            <li class="banner__order-item">Носки под мероприятия</li>
        </ul>
    @endslot
    @slot('icon')
        <img width="200" src="@asset('images/components/banners/fabrikanoskov_konstruktor.png')"
             alt="Носки с логотипами компаний">
    @endslot
@endcomponent