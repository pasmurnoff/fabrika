@include('components.pdf-generate.header')

@foreach($page as $item)
    @if (is_int($item)){{-- товар --}}
    @php
        $product = new WC_Product($item);
        $value = [
            'title' => $product->get_title(),
            'price' => $product->get_price(),
            'vendor_code' => $product->get_sku(),
            'size'  => $product->get_attribute('razmer-noskov'),
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
                @foreach($value['images_ids'] as $img)
                    <img src="{{ wp_get_attachment_image_url($img, 'thumbnail') }}" class="product__left-image">
                    @if ($loop->index >= 2)
                        @break
                    @endif
                @endforeach
            </td>
            <td class="product__right">
                Цена: {{ $value['price'] }} рублей<br>
                Размеры: {{ $value['size'] }}<br>
                Цвета: {{ $value['color'] }}<br>
                Наименование: {{ $value['title'] }}<br>
                Артикул: {{ $value['vendor_code'] }}<br>
                {{ $desc }}
            </td>
        </tr>
    </table>
    @else  {{-- заголовок --}}
    <div class="title font">{{ $item }}</div>
    <div class="line"></div>
    @endif
@endforeach