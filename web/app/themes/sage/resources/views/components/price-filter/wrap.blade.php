@php
    $currency         = get_field('na_zakaz_currency', $page_id) ?? '₽';
    $count            = get_field('na_zakaz_count', $page_id) ?? 'Количество';
    $for_one_pair     = get_field('na_zakaz_for_one_pair', $page_id) ?? 'За одну пару';
    $max_price        = get_field('na_zakaz_max_price', $page_id);
    $max_price_values = get_field('na_zakaz_max_price_values', $page_id);
    $approximate      = get_field('na_zakaz_approximate', $page_id) ?? 'Приблизительная стоимость';
    $saving           = get_field('na_zakaz_saving', $page_id) ?? 'Экономия';
@endphp
@if(!empty($max_price) AND !empty($max_price_values))
    <div class="price-filter mrgn35-bottom">
        <h3 class="title title_middle mrgn35-bottom">{{ $count }}</h3>
        <div class="price-filter__wrapper">
            <div class="price-filter__per-one text mrgn15-bottom">
                <span class="price-filter__old-price"><del><span id="maxValue" data-max="{{ $max_price }}">{{ $max_price }}</span> {{ $currency }} / {{ $for_one_pair }}</del></span>
                <span><span id="perOne">20</span> {{ $currency }}&nbsp;/&nbsp;{{ $for_one_pair }}</span>
            </div>
            <div class="price-filter__slider-wrap">
                <div class="price-filter__content">
                    <input
                        type="range"
                        min="1000"
                        max="4000"
                        step="1000"
                        class="price-filter__input"
                        id="priceFilter"
                        value="2000"
                        @php
                            $i = 1;
                        @endphp
                        @foreach($max_price_values as $value)
                            data-value{{$i}}={{$value['quantity']}}
                            data-price{{$i++}}={{$value['price']}}
                        @endforeach
                    >
                    <div class="price-filter__lower-fill"></div>
                    <div class="price-filter__upper-fill"></div>
                    <div class="price-filter__count text" id="priceDemo"></div>
                </div>
                <div class="price-filter__values">
                    @foreach($max_price_values as $value)
                        <div class="price-filter__value">{{ $value['quantity'] }}</div>
                        <div class="price-filter__price hidden">{{ $value['price'] }}</div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="price-filter__bottom">
            <div class="price-filter__summary">
                <div class="price-filter__estimate text text_bold text_large">{{ $approximate }}:</div>
                <div class="price-filter__money text mrgn5-bottom">
                    <span class="price-filter__sum text_large text_bold"><span id="endSum"></span> {{ $currency }}</span>
                    <div class="text_semibold text_black">{{ $saving }}:</div>
                    <div class="price-filter__discount text_semibold text_black"><span id="priceDiscount"></span>&nbsp;{{ $currency }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
