@if($productId &&  get_the_post_thumbnail_url($productId)) {{-- Если картинки нет, то товар не будет выводится --}}
    <li class="product">
        <a href="@php echo get_the_permalink($productId) @endphp" class="woocommerce-loop-product__link">
            <img width="300" height="300"
                 src="@php echo get_the_post_thumbnail_url($productId) @endphp"
                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                 alt="@php echo get_the_title($productId) @endphp">

            <div class="woocommerce-loop-product__wrapper">
                <h2 class="woocommerce-loop-product__title">@php echo get_the_title($productId) @endphp</h2>
                <span class="price">
			<span class="woocommerce-Price-amount amount">@php echo $product->get_price() @endphp&nbsp;<span
                        class="woocommerce-Price-currencySymbol"> руб.</span>
			</span>
		</span>
            </div>
        </a>
    </li>
@endif