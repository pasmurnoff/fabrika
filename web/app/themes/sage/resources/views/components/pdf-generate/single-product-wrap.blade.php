@php
    $product = new WC_Product($productID);
    $size_type = 'pa_razmer-noskov';
    foreach ($product->get_attributes() as $key => $value) {
        if (strpos($key, 'pa_razmer') !== false) {
            $size_type = $key;
            break;
        }
    }
    $value = [
        'title' => $product->get_title(),
        'url' => get_permalink($productID),
        'price' => $product->get_price(),
        'vendor_code' => $product->get_sku(),
        'size'  => $product->get_attribute($size_type),
        'color'  => $product->get_attribute('cvet'),
        'image_id' => $product->get_image_id(),
        'images_ids' => $product->get_gallery_image_ids(),
    ];
    //достаем и очищаем "состав" от мусора
    $desc = $product->get_description();
    if ($desc) {
    $desc = strip_tags($desc);
    $desc = trim($desc);
    $desc = explode("\n", $desc);
    $desc = $desc[0];
    $desc = str_ireplace('Состав:', '', $desc);
    $desc = explode(',', $desc);
    }
    // галерея
    $images = [];
    foreach ($value['images_ids'] as $img) {
    $images[]['min'] = wp_get_attachment_image_url($img, 'thumbnail');
    }
    // превью изображение
    $images[0]['max'] = wp_get_attachment_image_url($value['image_id'], 'large');
    // сколько строк объединять
    $images_count = count($images);
    $rowspan = ($images_count>3) ? '3' : $images_count;
    // ширина столбца с картинками
    $class_product_left = ($images_count>1) ? 'product__left' : 'product__left-no-gallery';
@endphp

@include('components.pdf-generate.single-product-template')
