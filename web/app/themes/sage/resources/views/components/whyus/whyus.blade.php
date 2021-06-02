@php
    $whyus_list = get_field('na_zakaz_whyus_list', $page_id);
@endphp
@if($whyus_list)
    <div class="whyus mrgn35">
        <div class="title_large title whyus__title">{!! get_field('na_zakaz_whyus_title', $page_id) !!} </div>
        <div class="whyus__inner">
            @foreach($whyus_list as $item)

                @component('components.whyus.whyus-item')

                    @slot('title')
                        {!! $item['title'] !!}
                    @endslot

                    @slot('text')
                        {!! $item['desc'] !!}
                    @endslot

                @endcomponent

            @endforeach
        </div>
    </div>
@endif
