@component('components.banner.banner', ['classes' => 'banner_manager mrgn15', 'title' => 'Зарабатывай с нами! Платим 10% от суммы счета', 'href' => '/konstruktor-zakaza-noskov', 'buttonText' => 'Заказать носки' ])
    @slot('text')
        <a class="banner__manager-link" href="/menedzher-po-prodazham"></a>
        <div class="banner__manager-text"> Мы всегда заинтересованы в том, чтобы работать с нами было не только
            удобно, но и выгодно! Продавай носки онлайн и оффлайн!
        </div>
        <span class="banner__manager-action text text_bold text_large">Мне интересно</span>
    @endslot
    @slot('icon')
        <img width="200" src="@asset('images/components/banners/manager.png')"
             alt="Носки с логотипами компаний">
    @endslot
@endcomponent