@php
    global $post;
    $terms = get_the_terms( $post->ID, 'product_cat' );
    foreach ( $terms as $term ) {
        $slug = $term->slug;
        $name = $term->name;
        $id = $term->term_id;
        break;
    }

    $products = wc_get_products([
         "product_cat" => $slug,
         "posts_per_page" => 12,
         "orderby" => 'rand'
    ]);
@endphp


@component('components.category-output.single-output', ['title' => 'Случайные товары'])
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
                @include('components.category-output.product', ['productId' => $productId])
            @endif
        @endforeach
        @php wp_reset_postdata() @endphp
    @endslot
@endcomponent
