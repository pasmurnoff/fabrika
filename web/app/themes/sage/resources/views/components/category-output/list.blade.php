@isset($class)
    <div class="{{$class}}">
        @endisset
        <ul class="category-output__list products columns-6">
            @php
                $products = wc_get_products([
                    "product_cat" => $prodCat->slug,
                    "posts_per_page" => 12
                    ])
            @endphp

            @foreach ($products as $product)
                @php setup_postdata($product) @endphp
                @php
                    $productId = $product->get_id();
                    $inStock = $product->is_in_stock();
                @endphp
                @include('components.product.product')
            @endforeach
            @php wp_reset_postdata() @endphp
        </ul>
        @isset($class)
    </div>
@endisset

