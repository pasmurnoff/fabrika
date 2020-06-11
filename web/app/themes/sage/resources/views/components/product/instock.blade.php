@if(isset($inStock) && $inStock)
    <div class="product__instock">В наличии</div>
@else
    <div class="product__instock product__instock_off">На заказ</div>
@endif