@if($productId)
    <li class="product">
        <a href="{{ get_the_permalink($productId) }}" class="woocommerce-loop-product__link">
            <div class="product__img-wrap">
                <img width="300" height="300"
                     src="{{ get_the_post_thumbnail_url($productId) }}"
                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                     alt="{!! get_the_title($productId) !!}">
                <object>
                    @include('components.product.tools')
                </object>
            </div>
            @include('components.product.content')
        </a>
    </li>
@endif