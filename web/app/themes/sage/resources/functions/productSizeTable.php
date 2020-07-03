<?php
function tableProductSizes()
{
    global $product;
    if ($product->is_type('variable')) {
        $attributes = $product->get_attributes();
        unset($attributes['pa_cvet'], $attributes['materialy']);
        if ($attributes) {
            $output = '';
            $output .= '<div class="table-attributes">
                        <div class="table-attributes__wrapper">
                            <div class="table-attributes__items">';
            foreach ($attributes as $key => $attribute) {
                $attrs = get_terms($key);
                $name = wc_get_attribute($attribute['id'])->name;
                if ($attrs) {
                    $output .= '<div class="table-attributes__list ">
                            <div class="table-attributes__item table-attributes__item_title text_bold">' . $name . '  </div>';
                    foreach ($attrs as $attr) {
                        $output .= '<div class="table-attributes__item">' . $attr->name . ' </div>';
                    }
                    $output .= '</div>';
                }
            }
            $output .= '</div></div></div>';
            return $output;
        }
    } else return;
}
