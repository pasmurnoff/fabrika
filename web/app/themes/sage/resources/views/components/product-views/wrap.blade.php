<div class="product__quantity mrgn15-bottom">
    <div class="text text_black">Просмотров за сегодня:
        <b class="text text_bold text_grey">@php global $product; echo get_post_meta($product->get_id(), 'views', true) @endphp</b>
    </div>
</div>