<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

if (!$product_attributes) {
    return;
}
?>
<ul class="woocommerce-product-attributes shop_attributes product__attributes">
    <?php foreach ($product_attributes as $product_attribute_key => $product_attribute) : ?>
        <li class="product__attribute woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr($product_attribute_key); ?>">
            <div class="product__attribute-label woocommerce-product-attributes-item__label"><?php echo wp_kses_post($product_attribute['label']); ?></div>
            <div class="product__attribute-dotted woocommerce-product-attributes-item__dotted"></div>
            <div class="product__attribute-value woocommerce-product-attributes-item__value"><?php echo wp_kses_post($product_attribute['value']); ?></div>
        </li>
    <?php endforeach; ?>
</ul>

<small>Информация о технических характеристиках, комплекте поставки, стране изготовления, внешнем виде и цвете товара носит справочный характер и основывается на последних доступных к моменту публикации сведениях</small>