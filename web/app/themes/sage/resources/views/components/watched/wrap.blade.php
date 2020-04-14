@if (isset($_COOKIE['watched']) && is_product())
    <div class="category-output mrgn35-top">
        <div class="category-output__title-wrap mrgn35-bottom pdng15-bottom">
            <h2 class="title title_large category-output_title">Последние просмотренные</h2>
            <a href="@php echo get_permalink(wc_get_page_id('shop')) @endphp"
               class="button button_transparent">Перейти в каталог</a>
        </div>

        <ul class="category-output__list products columns-6">
            @foreach(array_reverse($_COOKIE['watched']) as $productId)
                @if(get_the_ID() !== intval($productId))
                    @include('components.category-output.product')
                @endif
            @endforeach
        </ul>
    </div>
@endif


