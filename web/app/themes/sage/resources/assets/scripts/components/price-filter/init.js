import filterPriceVisual from './visual';
import formatStr from './formatString';

export default function () {
    filterPriceVisual();
    let slider = document.getElementById('priceFilter'),
        output = document.getElementById('priceDemo'),
        perOne = document.getElementById('perOne'),
        endSum = document.getElementById('endSum'),
        max = slider.max,
        discount = document.getElementById('priceDiscount');

    const firstPrice = perOne.innerHTML;

    output.innerHTML = formatStr(slider.value);
    endSum.innerHTML = formatStr(firstPrice * slider.value);
    discount.innerHTML = 0;
    let anotherPrice = firstPrice;
    slider.oninput = function () {
        output.innerHTML = formatStr(this.value);
        anotherPrice = firstPrice * (max - this.value * 0.3) / max;
        endSum.innerHTML = formatStr(this.value * anotherPrice);
        discount.innerHTML = formatStr(this.value * firstPrice - this.value * anotherPrice);
    }
}