import filterPriceVisual from './visual';
import formatStr from './formatString';

export default function () {
    filterPriceVisual();
    let slider = document.getElementById('priceFilter'),
        output = document.getElementById('priceDemo'),
        price = $('.price-filter__input'),
        dynamicPrice = document.getElementById('perOne'),
        sum = document.getElementById('endSum'),
        discount = document.getElementById('priceDiscount'),
        max = $('#maxValue').data('max');

    if (slider.value == 2000) {
        dynamicOutput(price.data('price2'), price.data('value2'))
    }

    function dynamicOutput(price, value)
    {
        output.innerHTML = formatStr(value);
        dynamicPrice.innerText = price;
        sum.innerText = formatStr(price * value);
        discount.innerText = formatStr(max * value - price * value);
    }

    slider.oninput = function () {
        if (this.value == 1000) {
            dynamicOutput(price.data('price1'), price.data('value1'))
        } else if (this.value == 2000) {
            dynamicOutput(price.data('price2'), price.data('value2'))
        } else if (this.value == 3000) {
            dynamicOutput(price.data('price3'), price.data('value3'))
        } else if (this.value == 4000) {
            dynamicOutput(price.data('price4'), price.data('value4'))
        }
    }

}