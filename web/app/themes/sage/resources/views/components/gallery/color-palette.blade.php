@php
    $page_id = get_the_ID();
    $gallery = get_field( 'color_palette', $page_id );
@endphp


@if(!empty($gallery))
    @php
        $section_title = get_field( 'color_palette_title', $page_id );
    @endphp
    @if($section_title)
        <div class="title title_large mrgn35-bottom">{!! $section_title !!}</div>
    @endif

    <div class="color-palette">
        @foreach($gallery as $item)
            <div class="color-palette__item">

                <img src="{{ $item['image']['sizes']['medium'] }}" alt="{{ $item['image']['alt'] }}" class="color-palette__item-img">

                @if($item['title'])
                    <div class="color-palette__item-title">{{ $item['title'] }}</div>
                @endif

            </div>
        @endforeach
    </div>

@endif
