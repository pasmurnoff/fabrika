@php
    $additional = get_field('na_zakaz_whyus_additional', $page_id);
    $icon = [
        0 => 'quality',
        1 => 'dashboard',
        2 => 'telemarketer',
    ];
@endphp
@if($additional)
    <div class="additional mrgn35">
        @foreach($additional as $item)

            @component('components.block-additional.additional-item')
                @slot('icon')
                    @include('icon::' . ( $icon[$loop->index] ?? 'quality' ))
                @endslot

                @slot('title')
                    {!! $item['title'] !!}
                @endslot

                @slot('text')
                    {!! $item['desc'] !!}
                @endslot
            @endcomponent

        @endforeach
    </div>
@endif
