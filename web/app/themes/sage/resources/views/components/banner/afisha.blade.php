<div class="afisha mrgn35">
    <div class="afisha__inner-mobile">
        <div class="afisha__inner">
            @component('components.banner.afisha-item', ['color' => '#7F25FC', 'href' => 'konstruktor-zakaza-noskov/', 'text' => 'Рассчитать стоимость носков онлайн'])
                @slot('icon')
                    @include('icon::banners.afisha.online')
                @endslot
            @endcomponent
            @component('components.banner.afisha-item', ['color' => '#F82F2F', 'href' => 'programma-lojalnosti/', 'text' => 'Получайте скидки до 20% при оптовых заказах носков'])
                @slot('icon')
                    @include('icon::banners.afisha.skidki')
                @endslot
            @endcomponent
            @component('components.banner.afisha-item', ['color' => '#FFA523', 'href' => 'na-zakaz/', 'text' => 'Носки на заказ от 35 рублей по вашему дизайну'])
                @slot('icon')
                    @include('icon::banners.afisha.zakaz')
                @endslot
            @endcomponent
            @component('components.banner.afisha-item', ['color' => '#31D665', 'href' => 'menedzher-po-prodazham/', 'text' => 'Зарабатывай с нами! Предложения для представителей в городах'])
                @slot('icon')
                    @include('icon::banners.afisha.zarabativai')
                @endslot
            @endcomponent
        </div>
    </div>
</div>