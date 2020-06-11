<div class="banner__wrapper banner__wrapper_duo {{ $class or '' }}">
    @component('components.banner.duo-item', ['href' => '/noski-optom', 'title' => 'Продажа носков, колготок и чулок оптом', 'buttonText' =>' Купить оптом'])
        @slot('text')
            Оптовый склад носков, колготок и чулок от производителя. Цены от 12 рублей. Доставка по всей России, странам
            СНГ и миру. Мы работаем без выходных. Интернет-заказ доступен 24/7
        @endslot
        @slot('icon')
            @include('icon::okay')
        @endslot
    @endcomponent
    @component('components.banner.duo-item', ['href' => '/konstruktor-zakaza-noskov', 'title' => 'Носки, колготки и чулки на заказ по вашему дизайну', 'buttonText' =>'Оформить заказ'])
        @slot('text')
            Наша фабрика может отвязать для вас носки, колготки и чулки на заказ. Любых расцветок и дизайнов. У нас своё
            производство и возможны даже минимальные оптовые партии.
        @endslot
        @slot('icon')
            @include('icon::diamond')
        @endslot
        @slot('buttonText')
            Оформить заказ
        @endslot
    @endcomponent
</div>
