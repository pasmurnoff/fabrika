@if (isset($_COOKIE['watched']) && is_product())
    <div class="category-output mrgn35-top">
        <div class="category-output__title-wrap mrgn35-bottom pdng15-bottom">
            <h2 class="title title_large category-output_title">Последние просмотренные</h2>
            <a href="@php echo get_permalink(wc_get_page_id('shop')) @endphp"
               class="button button_transparent">Перейти в каталог</a>
        </div>

        <ul class="category-output__list products columns-6">
            @php $i = 1 @endphp {{-- Это чтобы выводилось 12 карточек даже если в массиве есть id страницы на которой находимся --}}
            @foreach(array_reverse($_COOKIE['watched']) as $productId)
                @if(get_the_ID() !== intval($productId) && $i <=12)
                    @php $i++ @endphp
                    @php $inStock = wc_get_product($productId)->is_in_stock() @endphp
                    @include('components.category-output.product')
                @endif
            @endforeach
        </ul>
    </div>
@endif


