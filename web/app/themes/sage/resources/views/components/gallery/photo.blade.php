@if(!empty($gallery))
    @if(!empty($sectionTitle))
        <div class="title title_large mrgn35-bottom">{{ $sectionTitle }}</div>
    @endif

    <div class="woocommerce-product-gallery photo-gallery">
        <figure class="woocommerce-product-gallery__wrapper photo-gallery__wrap {{ $wrapClass or '' }}">

            @foreach($gallery as $item)
                <div class="woocommerce-product-gallery__image photo-gallery__item {{ $itemClass or '' }}">
                    <a href="{{ $item['url'] }}" class="photo-gallery__item-link">
                        <img class="photo-gallery__item-img"
                             alt="{!! $item['alt'] !!}"
                             data-large_image="{{ $item['url'] }}"
                             data-large_image_width="{{ $item['width'] }}"
                             data-large_image_height="{{ $item['height'] }}"
                             src="{{ $item['sizes']['medium'] }}"
                        />
                    </a>
                </div>
            @endforeach

        </figure>
    </div>
@endif
