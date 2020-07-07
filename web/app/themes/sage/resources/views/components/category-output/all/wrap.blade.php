@php
    $productCategories = get_terms([
        'taxonomy' => "product_cat",
        'parent' => '',
    ]);
$publishedProductIds = [];
@endphp
@foreach($productCategories as $prodCat)
    @php
        $products = wc_get_products([
            "product_cat" => $prodCat->slug,
            "posts_per_page" => 18,
            'post_status' => 'publish',
            'exclude' => $publishedProductIds
            ])
    @endphp
    @if($products)
        <div class="category-output mrgn35-top mrgn50-bottom">
            @include('components.category-output.all.title')
            <ul class="category-output__list products @php echo isset($overflow) ? 'products_overflow' : ''  @endphp">

                @foreach ($products as $product)
                    @php
                        $inStock = $product->is_in_stock();
                    @endphp
                    @include('components.product.product')
                    @php $publishedProductIds[] = $product->get_id() @endphp
                @endforeach
            </ul>
        </div>
    @endif
@endforeach