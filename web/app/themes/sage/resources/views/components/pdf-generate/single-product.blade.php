@php
    $product = new WC_Product($productID);
    $value = [
        'title' => $product->get_title(),
        'url' => get_permalink($productID),
        'price' => $product->get_price(),
        'vendor_code' => $product->get_sku(),
        'size'  => $product->get_attribute('razmer-noskov'),
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

<style>
    .font {
        font-family: Arial, sans-serif;
    }

    .title {
        font-size: 30px;
        background: #463f37;
        color: #ffffff;
        padding: 20px 40px;
    }

    .footnote {
        font-size: 12px;
        text-align: center;
    }

    .footnote__link {
        color: #000000;
    }

    .product {
        width: 100%;
        padding: 50px 35px;
    }

    .product__left {
        width: 70%;
    }

    .product__left-no-gallery {
        width: 60%;
    }

    .product__images {
        width: 100%;
    }

    .product__images-td-first {
        vertical-align: top;
        width: 150px;
    }

    .product__images-td-last {
        vertical-align: bottom;
    }

    .product__images-td-max {
        vertical-align: top;
        padding-left: 20px;
    }

    .product__images-full {
        width: 500px;
    }

    .product__item {
        width: 100%;
        padding-bottom: 25px;
    }

    .product__item-title {
        font-size: 12px;
    }

    .product__item-text {
        font-size: 20px;
    }
</style>

<div class="title font">
    {{ $value['title'] }}
</div>


<table class="product font">
    <tr>
        <td class="{{$class_product_left}}">

            <table class="product__images">
                @foreach($images as $img)
                    <tr>
                        @if ($loop->index == 0) {{-- первая строка таблицы --}}
                        @if (isset($img['min']))
                            <td class="product__images-td-first">
                                <img src="{{ $img['min'] }}">
                            </td>
                        @endif
                        <td rowspan="{{ $rowspan }}" class="product__images-td-max">
                            <img src="{{ $img['max'] }}" class="product__images-full">
                        </td>
                        @elseif ($loop->index == 1 && isset($img['min'])) {{-- вторая строка таблицы --}}
                        <td>
                            <img src="{{ $img['min'] }}">
                        </td>
                        @elseif ($loop->index == 2 && isset($img['min'])) {{-- третья и последняя строка таблицы --}}
                        <td class="product__images-td-last">
                            <img src="{{ $img['min'] }}">
                        </td>
                        @break
                        @endif
                    </tr>
                @endforeach
            </table>
        </td>
        <td class="product__right">


            <table class="product__item">
                <tr>
                    <td class="product__item-title">Цена:</td>
                </tr>
                <tr>
                    <td class="product__item-text">
                        @if ($value['price'])
                            {{ $value['price'] }} руб.
                        @else
                            По запросу
                        @endif
                    </td>
                </tr>
            </table>


            @if ($value['vendor_code'])
                <table class="product__item">
                    <tr>
                        <td class="product__item-title">Артикул:</td>
                    </tr>
                    <tr>
                        <td class="product__item-text">{{ $value['vendor_code'] }}</td>
                    </tr>
                </table>
            @endif


            <table class="product__item">
                <tr>
                    <td class="product__item-title">Размеры:</td>
                </tr>
                <tr>
                    <td class="product__item-text">
                        @if ($value['size'])
                            {{ $value['size'] }}
                        @else
                            По запросу
                        @endif
                    </td>
                </tr>
            </table>

            @if ($value['color'])
                <table class="product__item">
                    <tr>
                        <td class="product__item-title">Цвет:</td>
                    </tr>
                    <tr>
                        <td class="product__item-text">{{ $value['color'] }}</td>
                    </tr>
                </table>
            @endif

            @if ($desc)
                <table class="product__item">
                    <tr>
                        <td class="product__item-title">Состав:</td>
                    </tr>
                    <tr>
                        <td class="product__item-text">
                            @foreach($desc as $item)
                                @if (!$loop->last)
                                    {{ $item }},<br>
                                @else
                                    {{ $item }}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                </table>
            @endif

        </td>
    </tr>
</table>


<div class="footnote font">
    Более подробно см. на <a href="{{$value['url']}}" class="footnote__link">{{$value['url']}}</a>
    @php
    echo '<br>' . date('i-s');
    @endphp
</div>





