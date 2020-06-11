@php
    global $product;
    $views = get_post_meta($product->get_id(), 'views', true) @endphp

@if($views > 0)
    <div class="product__quantity mrgn15-bottom">
        <div class="product__quantity_text text text_black"><span class="product__quantity_icon">@include('icon::view')</span>Просмотров за сегодня:
            <b class="text text_bold text_grey">@php  echo $views @endphp</b>
        </div>
    </div>
@endif