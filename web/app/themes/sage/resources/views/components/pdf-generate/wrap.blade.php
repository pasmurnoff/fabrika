@include('components.pdf-generate.header')

@foreach($page as $item)
    @if (is_int($item)){{-- товар --}}
    @php
        $product = new WC_Product($item);
        //тип размера
        $size_type = 'pa_razmer-noskov';
        foreach ($product->get_attributes() as $key => $value) {
            if (strpos($key, 'pa_razmer') !== false) {
                $size_type = $key;
                break;
            }
        }
        //все значения
        $value = [
            'title' => $product->get_title(),
            'price' => $product->get_price(),
            'vendor_code' => $product->get_sku(),
            'size'  => $product->get_attribute($size_type),
            'color'  => $product->get_attribute('cvet'),
            'images_ids' => $product->get_gallery_image_ids(),
        ];
        //достаем и очищаем "состав" от мусора
        $desc = $product->get_description();
        $desc = strip_tags($desc);
        $desc = trim($desc);
        $desc = explode("\n", $desc);
        $desc = $desc[0];
    @endphp
    <table class="product font">
        <tr>
            <td class="product__left">
                @if ($value['images_ids'])
                    @foreach($value['images_ids'] as $img)
                        <img src="{{ wp_get_attachment_image_url($img, 'thumbnail') }}" class="product__left-image">
                        @if ($loop->index >= 2)
                            @break
                        @endif
                    @endforeach
                @else
                    {{-- если нет галереи, то ставим превью картинку --}}
                    <img src="{{ wp_get_attachment_image_url($product->get_image_id(), 'thumbnail') }}" class="product__left-image">
                @endif
            </td>
            <td class="product__right">
                Цена: {{ $value['price'] ? $value['price'] . ' рублей' : 'По запросу' }}<br>

                Размеры: {{ $value['size'] ? $value['size'] : 'По запросу' }}<br>

                @if ($value['color'])
                    Цвета: {{ $value['color'] }}<br>
                @endif

                @if ($value['title'])
                    Наименование: {{ $value['title'] }}<br>
                @endif

                @if ($value['vendor_code'])
                    Артикул: {{ $value['vendor_code'] }}<br>
                @endif

                {{ $desc }}
            </td>
        </tr>
    </table>
    @else  {{-- заголовок --}}
    <div class="title font">{{ $item }}</div>
    <div class="line"></div>
    @endif
@endforeach