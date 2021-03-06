@component('components.category-output.single-output', ['title' => 'Вы смотрели', 'button' => 'Перейти в магазин' , 'overflow' => ''])
    @slot('href')
        @php echo get_permalink(wc_get_page_id('shop')) @endphp
    @endslot
    @slot('productLoop')
        @php $i = 1 @endphp {{-- Это чтобы выводилось 12 карточек даже если в массиве есть id страницы на которой находимся --}}
        @foreach(array_reverse($_COOKIE['watched']) as $productId)
            @php $product = wc_get_product($productId) @endphp
            @if(!$product) {{-- Если продукт удалили, то пропускаем --}}
                @continue
            @endif
            @if(get_the_ID() !== intval($productId) && $i <=12)
                @php $i++ @endphp
                @php $inStock = $product->is_in_stock() @endphp
                @include('components.product.product')
            @endif
        @endforeach
    @endslot
@endcomponent