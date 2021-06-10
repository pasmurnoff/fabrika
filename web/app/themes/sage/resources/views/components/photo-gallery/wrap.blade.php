@if(!empty($gallery))
    <div class="woocommerce-product-gallery photo-gallery">
        <figure class="woocommerce-product-gallery__wrapper photo-gallery__wrap">

            @foreach($gallery as $item)
                <div class="woocommerce-product-gallery__image photo-gallery__item">
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
