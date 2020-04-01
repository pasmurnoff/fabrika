@php
    $productCategories = get_terms([
        'taxonomy' => "product_cat",
        'orderby' => 'date'
    ])
@endphp
@foreach($productCategories as $prodCat)
    <div class="category-output mrgn35-top">
        <h2 class="category-output__title title title_large mrgn35-bottom pdng15-bottom">@php echo $prodCat->name @endphp</h2>
        {{-- Думаю здесь в зависимости от slug можно будет добавить баннер --}}
        <ul class="category-output__list products columns-6">
            @php
                $products = wc_get_products([
                    "product_cat" => $prodCat->slug,
                    "posts_per_page" => 12
                    ])
            @endphp
            @include('components.category-output.list')
        </ul>
    </div>
@endforeach

