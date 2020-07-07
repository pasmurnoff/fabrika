@php
    $productCategories = get_terms([
        'taxonomy' => "product_cat",
        'orderby' => 'count',
    ]);
$publishedProductIds = [];
@endphp

@foreach($productCategories as $prodCat)
    @php
        $products = wc_get_products([
            "product_cat" => $prodCat->slug,
            "posts_per_page" => isset($count) ? $count : 12,
            'post_status' => 'publish',
            'exclude' => $publishedProductIds
            ])
    @endphp
    @if($products)
        <div class="category-output mrgn35-top">
            @include('components.category-output.title')
            <ul class="category-output__list products @php echo isset($overflow) ? 'products_overflow' : ''  @endphp">
                @foreach ($products as $product)
                    @php
                        $inStock = $product->is_in_stock();
                    @endphp
                    @include('components.product.product')
                    @php $publishedProductIds[] = $product->get_id() @endphp
                @endforeach
            </ul>

            @include('components.page-index-banners.banners')
        </div>
    @endif
@endforeach




