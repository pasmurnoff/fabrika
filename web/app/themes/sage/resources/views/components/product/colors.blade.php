@php
    $variation_data = wc_get_product($productId)->get_attributes();
    $variation_colors = $variation_data['pa_cvet'];
    $color_ids = $variation_colors['options'];
@endphp

@if($color_ids)
    <div class="product__colors filter__colors">
        @foreach($color_ids as $id)
            @php $color = get_term_meta($id, 'color', 'true'); @endphp
            <div class="product__color-container filter__item">
                <div class="product__color filter__color" style="background-color:{{$color}}"></div>
            </div>
        @endforeach
    </div>
@endif