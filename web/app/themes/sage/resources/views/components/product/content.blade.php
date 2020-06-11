<div class="woocommerce-loop-product__wrapper">
    @include('components.product.colors')
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