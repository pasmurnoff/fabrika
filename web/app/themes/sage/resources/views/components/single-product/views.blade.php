@php
    global $product;
    $views = get_post_meta($product->get_id(), 'views', true) @endphp

@if($views > 0)
    <div class="product__quantity mrgn15-bottom">
        <div class="product__quantity_text text text_black"><span
                    class="product__quantity_icon">@include('icon::view')</span><span class="product__views">Сегодня "{!! get_the_title() !!}"
            смотрели:&nbsp;
            <strong>@php echo $views @endphp</strong>
                </span>
        </div>
    </div>
@endif