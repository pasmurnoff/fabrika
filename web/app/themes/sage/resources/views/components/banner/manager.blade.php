@component('components.banner.banner', [
    'classes' => 'banner_manager mrgn35',
    'href' => '/konstruktor-zakaza-noskov',
    'buttonText' => 'Заказать носки' ])

    @slot('title')
        Зарабатывай с нами! <br> Платим 10% от суммы счета
    @endslot

    @slot('text')
        <a class="banner_manager-link" href="/menedzher-po-prodazham"></a>
        <div class="banner_manager-text"> Мы всегда заинтересованы в том, чтобы работать с нами было не только
            удобно, но и выгодно! Продавай носки онлайн и оффлайн!
        </div>
        <span class="banner_manager-action button button_transparent">Хочу работать с вами</span>
    @endslot
    @slot('icon')
        <img width="200" src="@asset('images/components/banners/manager.png')"
             alt="Носки с логотипами компаний">
    @endslot
@endcomponent