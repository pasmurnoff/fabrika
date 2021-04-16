<?php
add_action('woocommerce_product_options_sku', 'art_woo_add_custom_fields');
function art_woo_add_custom_fields()
{
    global $product, $post;
    echo '<div class="options_group">';// Группировка полей
    woocommerce_wp_text_input(array(
        'id' => '_fabric_id',
        'label' => __('Артибут фабрики', 'woocommerce'),
        'placeholder' => 'Атрибут фабрики',
        'desc_tip' => 'true',
        //'custom_attributes' => array('required' => 'required'),
        'description' => __('Введите здесь значение поля', 'woocommerce'),
    ));
    echo '</div>';
}

add_action('woocommerce_process_product_meta', 'art_woo_custom_fields_save', 10);
function art_woo_custom_fields_save($post_id)
{
    // Сохранение текстового поля
    $woocommerce_text_field = $_POST['_fabric_id'];
    if (!empty($woocommerce_text_field)) {
        update_post_meta($post_id, '_fabric_id', esc_attr($woocommerce_text_field));
    }
}
