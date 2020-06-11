<?php
function get_product_colors()
{
    global $product;
    $variation_data = wc_get_product($product)->get_attributes();
    $variation_colors = $variation_data['pa_cvet'];
    $color_ids = $variation_colors['options'];
    $output = '';

    if ($color_ids) {
        $output .= '<div class="product__colors filter__colors">';

        foreach ($color_ids as $id) {
            $color = get_term_meta($id, 'color', 'true');
            $output .= '<div class="product__color-container filter__item">
                    <div class="product__color filter__color" style="background-color:' . $color . '"></div>
                    </div>';
        }
        $output .= '</div>';
    }
    return $output;
}
