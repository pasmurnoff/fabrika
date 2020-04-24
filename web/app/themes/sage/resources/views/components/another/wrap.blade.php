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
         'exclude' => $currentId
     ]);

 $random = rand(0,count($productCategories) - 2);
@endphp

@php $prodCat =$productCategories[$random]@endphp
<div class="category-output mrgn35-top">
    @include('components.category-output.title')
    @include('components.category-output.list')
</div>
