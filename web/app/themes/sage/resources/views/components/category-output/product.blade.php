@if($productId)
    <li class="product">
        @if(isset($inStock) && $inStock)
            <div class="product__instock">
                @include('icon::common.instock')
            </div>
        @endif
        <a href="@php echo get_the_permalink($productId) @endphp" class="woocommerce-loop-product__link">
            <img width="300" height="300"
                 src="@php echo get_the_post_thumbnail_url($productId) @endphp"
                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                 alt="@php echo get_the_title($productId) @endphp">
            <div class="woocommerce-loop-product__wrapper">
                <h2 class="woocommerce-loop-product__title">@php echo get_the_title($productId) @endphp</h2>
                <span class="price">
			<span class="woocommerce-Price-amount amount">@php echo wc_get_product( $productId )->get_price() @endphp&nbsp;<span
                        class="woocommerce-Price-currencySymbol">руб.</span>
			</span>
		</span>
            </div>
        </a>
        <div class="product__tools">
            @php echo do_shortcode('[yith_wcwl_add_to_wishlist product_id=' . $productId . ']') @endphp
            @php echo do_shortcode('[yith_quick_view type="icon" label="" product_id=' . $productId . ']') @endphp
        </div>
    </li>
@endif