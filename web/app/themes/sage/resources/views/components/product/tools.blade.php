<div class="product__tools">
    @include('components.wishlist.button', ['productID' => $productId])
    {{-- @php echo do_shortcode('[yith_wcwl_add_to_wishlist label="" product_id=' . $productId . ']') @endphp --}}
    @php echo do_shortcode('[yith_quick_view type="icon" label="" product_id=' . $productId . ']') @endphp
</div>