@php
    global $post;
    $terms = get_the_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ) {
        $currentId = $term->term_id;
        break;
    }

    $productCategories = get_terms([
         'taxonomy' => "product_cat",
         'orderby' => 'rand',
         'include' => $currentId
     ]);

@endphp
@foreach($productCategories as $cat)
    @php
        $slug = $cat->slug;
        $name = $cat ->name;
        $id = $cat->term_id
    @endphp
@endforeach

@php
    $products = wc_get_products([
    "product_cat" => $slug,
    "orderby" => 'rand',
    "posts_per_page" => 12,
    "parent" => 0
]);
@endphp


@component('components.category-output.single-output', ['title' => 'Случайные товары', 'overflow' => ''])
    @slot('href')
        @php echo get_category_link($id) @endphp
    @endslot
    @slot('button')
        Все @php echo mb_strtolower($name) @endphp
    @endslot

    @slot('productLoop')
        @foreach ($products as $product)
            @php setup_postdata($product) @endphp
            @php $productId = $product->get_id() @endphp
            @if (get_the_ID() !== intval($productId))
                @include('components.product.product', ['productId' => $productId])
            @endif
        @endforeach
        @php wp_reset_postdata() @endphp
    @endslot
@endcomponent
