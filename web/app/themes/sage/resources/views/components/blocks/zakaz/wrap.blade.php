<div class="block-order mrgn50 pdng50">
    @include('components.blocks.zakaz.nav')
    <div class="block-order__wrapper">
        @component('components.blocks.zakaz.item', ['title' => 'Размер'])
            @slot('svg')
                @include('icon::zakaz.size')
            @endslot
            @slot('text')
                Один размер подходит всем: <br>
                c 38 по 45 (EU) <br>
                или с 8 по 12 (US)
            @endslot
        @endcomponent

        @component('components.blocks.zakaz.item', ['title' => 'Материал'])
            @slot('svg')
                @include('icon::zakaz.material')
            @endslot
            @slot('text')
                80% Хлопок <br>
                17% Полиамид <br>
                3% Эластан
            @endslot
        @endcomponent

        @component('components.blocks.zakaz.item', ['title' => 'Сроки'])
            @slot('svg')
                @include('icon::zakaz.time')
            @endslot
            @slot('text')
                Время изготовки<br>
                4 - 6 недель <br>
                на партию
            @endslot
        @endcomponent

        @component('components.blocks.zakaz.item', ['title' => 'Доставка'])
            @slot('svg')
                @include('icon::zakaz.delivery')
            @endslot
            @slot('text')
                Ваши носки <br>
                будут доставлены <br>
                на указанный адрес
            @endslot
        @endcomponent
    </div>
</div>