@php
    $terms = get_terms('pa_cvet');
        //$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //$constUrl = $url;
    if (is_product_category()) {
        $category = get_queried_object();
        $category_id = $category->term_id;
        $url = get_category_link( $category_id );
    } else {
        $url = get_permalink();
    }
@endphp
<section class="mrgn35-top">
    <h3 class="title title_middle">{{ pll__('Цвета') }}</h3>

    <ul class="filter__colors pdng15-top">
        @foreach ($terms as $term)
            @php
                $slug = $term->slug;
                $id = $term->term_id;
                $color = get_term_meta($id, 'color', 'true');
            @endphp
            @if($color)
                @php
                    $currentColor = strpos($url, $slug) ? 'filter__item_current' : '';
                    $url = add_query_arg(['filter_cvet' => $slug], $url);
                @endphp

                <li class="filter__item @php echo $currentColor @endphp ">
                    <a class="filter__link"
                       href="@php echo esc_url($url) @endphp">
                        <div class="filter__color"
                             style="background-color: @php echo $color @endphp">
                        </div>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</section>