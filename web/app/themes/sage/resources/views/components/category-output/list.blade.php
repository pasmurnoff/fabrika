<ul class="category-output__list products columns-6">
    @php
        $products = wc_get_products([
            "product_cat" => $prodCat->slug,
            "posts_per_page" => 12
            ])
    @endphp

    @foreach ($products as $product)
        @php setup_postdata($product) @endphp
        @php $productId = $product->get_id() @endphp
        @include('components.category-output.product')
    @endforeach

</ul>