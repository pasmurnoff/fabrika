<ul class="category-output__list products @php echo isset($overflow) ? 'products_overflow' : ''  @endphp">
    @php
        $products = wc_get_products([
            "product_cat" => $prodCat->slug,
            "posts_per_page" => isset($count) ? $count : 12,
            'post_status' => 'publish',
            ]);
    @endphp

    @foreach ($products as $product)
        @php
            $inStock = $product->is_in_stock();
        @endphp
        @include('components.product.product')
    @endforeach
</ul>

