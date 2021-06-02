@php
    $order_icons = get_field('na_zakaz_order_icons', $page_id);
    $svg = [
        0 => 'size',
        1 => 'material',
        2 => 'time',
        3 => 'delivery',
    ];
@endphp
@if($order_icons)
    <div class="block-order mrgn50 pdng50">

        <div class="block-order__nav">
            @foreach($order_icons as $icon)
                <div class="block-order__nav-item">{!! $icon['title'] !!}</div>
            @endforeach
        </div>

        <div class="block-order__wrapper">
            @foreach($order_icons as $key => $icon)
                @component('components.blocks.zakaz.item', ['title' => $icon['title']])
                    @slot('svg')
                        @include('icon::zakaz.' . ($svg[$key] ?? 'size'))
                    @endslot
                    @slot('text')
                        {!! $icon['desc'] !!}
                    @endslot
                @endcomponent
            @endforeach
        </div>

    </div>
    <div class="block-text">
        <div class="text">
            {!! get_field('na_zakaz_order_icons_text', $page_id) !!}
        </div>
    </div>
@endif
