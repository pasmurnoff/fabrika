@if($productId)
    <li class="product">
        <a href="{{ get_the_permalink($productId) }}" class="woocommerce-loop-product__link">
            <img width="300" height="300"
                 src="{{ get_the_post_thumbnail_url($productId) }}"
                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                 alt="{!! get_the_title($productId) !!}">
            <div class="woocommerce-loop-product__wrapper">
                <h2 class="woocommerce-loop-product__title">{!! get_the_title($productId) !!}</h2>
                @if(wc_get_product( $productId )->get_price())
                    <span class="price">
                    <span class="woocommerce-Price-amount amount">
                         {!! wc_get_product( $productId )->get_price() !!}
                            <span class="woocommerce-Price-currencySymbol">₽</span>
                    </span>
		            </span>
                @endif
                @include('components.product.instock')
            </div>
        </a>
        @include('components.product.tools')
    </li>
@endif