<div class="output-all {{$class or ''}}">
    <a href="{{$href or '/magazin'}}"
       class="output-all__button button button_transparent mrgn15-bottom">{{ $button or 'Все носки' }}</a>
    <ul class="products columns-6">
        @php
            $productCategories = get_terms([
                'taxonomy' => "product_cat",
                'orderby' => 'count',
                'parent' => 0
            ])
        @endphp
        @foreach($productCategories as $prodCat)
            @php
                $products = wc_get_products([
                    "product_cat" => $prodCat->slug,
                    "posts_per_page" => 12
                    ])
            @endphp
            @foreach ($products as $product)
                @php setup_postdata($product) @endphp
                @php $productId = $product->get_id() @endphp
                @include('components.product.product')
            @endforeach

        @endforeach
    </ul>
    <a href="{{$href or '/magazin'}}"
       class="output-all__button output-all__button_position  button button_transparent mrgn15-bottom">{{ $button or 'Все носки' }}</a>
</div>