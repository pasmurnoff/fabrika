@if(isset($inStock) && $inStock)
    <div class="product__instock">{!! pll__('В наличии') !!}</div>
@else
    <div class="product__instock product__instock_off">{!! pll__('На заказ') !!}</div>
@endif
