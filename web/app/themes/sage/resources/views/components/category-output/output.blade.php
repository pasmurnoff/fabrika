@php
    $parentCategories = get_terms([
        'taxonomy' => "product_cat",
        'orderby' => 'count',
        'parent' => 0
    ]);

    $parentIds = [];
    foreach ($parentCategories as $parent)
        $parentIds[] = $parent->term_id;

    $productCategories = get_terms([
        'taxonomy' => "product_cat",
        'orderby' => 'count',
        'exclude' => $parentIds
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
            ]);

    $productCount = count($products);

        if(($productCount > 6) && $productCount < 12) {
            $products = array_slice($products, 0 , 6, true);
        }

    @endphp
    @if($products && (count($products) >= 6))
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




