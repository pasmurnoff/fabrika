@if(!is_shop())
    @php
        $term = get_queried_object();
        $product_category = $term->slug;
    @endphp
@else
    @php $product_category = '' @endphp
@endif
@php
    //Iterate through all products in this category
    $query_args = array(

        'product_cat' => $product_category,
        'post_type' => 'product',

        //Grabs ALL post
        'posts_per_page' => -1
    );

    $query = new WP_Query($query_args);
    $term_array = [];
@endphp
@while ($query->have_posts())
    @php $query->the_post();
    $terms = get_the_terms(get_the_ID(), 'product_tag');
    @endphp
    @if (!empty($terms) && !is_wp_error($terms))
        @foreach ($terms as $term)
            @php
                $slug = $term->slug;
                $name = $term->name;
            @endphp
            @php $term_array[] =  '<a class="tags__item"' .  'href="/product-tag/'. $slug . '">'. $name .'</a>'   @endphp
        @endforeach

    @endif
@endwhile

@php
    //Remove any duplicates.
    $tags_unique = array_unique($term_array);
@endphp

@if($tags_unique)
    <div class="tags @php echo is_archive() ? 'mrgn35' : 'mrgn35-bottom' @endphp ">
        @foreach($tags_unique as $tag)
            {!! $tag !!}
        @endforeach
    </div>
@endif