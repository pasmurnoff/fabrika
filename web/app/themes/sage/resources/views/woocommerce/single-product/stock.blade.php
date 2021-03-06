<?php
/**
 * Single Product stock.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/stock.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

?>
{{--<p class="stock @php echo esc_attr($class); @endphp">@php echo wp_kses_post($availability); @endphp</p>--}}
<p class="stock @php echo esc_attr($class); @endphp">
    @if(esc_attr($class) == 'in-stock')
        <span class="single-product__stock-wrap">
            <span class="single-product__instock">
                   @include('icon::common.instock')
                <span class="instock__text">@php echo  wp_kses_post($availability) @endphp</span>
            </span>
        </span>
    @elseif(esc_attr($class) == 'out-of-stock')
        Нет в наличии
    @endif
</p>

