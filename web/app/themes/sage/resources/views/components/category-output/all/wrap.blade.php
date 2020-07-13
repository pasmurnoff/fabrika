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
            ]);

      $productCount = count($products);

        if($productCount > 6 && $productCount < 12) {
            $products = array_slice($products, 0 , 6, true);
        } elseif($productCount > 12 && $productCount < 18) {
            $products = array_slice($products, 0 , 12, true);
        }
    @endphp
    @if($products && count($products) >=6)
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