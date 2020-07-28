<div class="price-filter mrgn35-bottom">
    <h3 class="title title_middle mrgn35-bottom">Количество</h3>
    <div class="price-filter__wrapper">
        <div class="price-filter__per-one text mrgn15-bottom">
            <span class="price-filter__old-price"><del><span id="maxValue" data-max="{{ get_field('max') }}">{{ get_field('max') }}</span> ₽&nbsp;/&nbsp;За одну пару</del></span>
            <span><span id="perOne">20</span> ₽&nbsp;/&nbsp;За одну пару</span>
        </div>
        <div class="price-filter__slider-wrap">
            <div class="price-filter__content">
                <input type="range" min="1000" max="4000" step="1000" class="price-filter__input" id="priceFilter"
                       value="2000"
                       <?php $i = 1 ?>
                       <?php foreach (get_field('values') as $value) :?>
                       data-value{{$i}}={{$value['quantity']}}
                               data-price{{$i++}}={{$value['price']}}
                <?php endforeach; ?>
                >
                <div class="price-filter__lower-fill"></div>
                <div class="price-filter__upper-fill"></div>
                <div class="price-filter__count text" id="priceDemo"></div>
            </div>
            <div class="price-filter__values">
                @foreach(get_field('values') as $value)
                    <div class="price-filter__value">{{ $value['quantity'] }}</div>
                    <div class="price-filter__price hidden">{{ $value['price'] }}</div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="price-filter__bottom">
        <div class="price-filter__summary">
            <div class="price-filter__estimate text text_bold text_large">Приблизительная стоимость:</div>
            <div class="price-filter__money text mrgn5-bottom">
                <span class="price-filter__sum text_large text_bold"><span id="endSum"></span>&nbsp;₽</span>
                <div class="text_semibold text_black">Экономия:</div>
                <div class="price-filter__discount text_semibold text_black"><span id="priceDiscount"></span>&nbsp;₽
                </div>
            </div>
        </div>
    </div>
</div>