@include('components.pdf-generate.single-product-style')
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
                        {{ $value['price'] ? $value['price'] . ' руб.' : 'По запросу' }}
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
                        {{ $value['size'] ? $value['size'] : 'По запросу' }}
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
</div>