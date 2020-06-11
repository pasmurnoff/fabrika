@if(isset($inStock) && $inStock)
    <div class="product__instock">
        @include('icon::common.instock')
    </div>
@endif