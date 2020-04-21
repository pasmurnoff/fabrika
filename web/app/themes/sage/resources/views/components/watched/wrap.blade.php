@if (isset($_COOKIE['watched']) && is_product())
    @component('components.category-output.single-output', ['title' => 'Последние просмотренные', 'button' => 'Перейти в каталог'])
        @slot('href')
            @php echo get_permalink(wc_get_page_id('shop')) @endphp
        @endslot
        @slot('productLoop')
            @php $i = 1 @endphp {{-- Это чтобы выводилось 12 карточек даже если в массиве есть id страницы на которой находимся --}}
            @foreach(array_reverse($_COOKIE['watched']) as $productId)
                @if(get_the_ID() !== intval($productId) && $i <=12)
                    @php $i++ @endphp
                    @include('components.category-output.product')
                @endif
            @endforeach
        @endslot
    @endcomponent
@endif

