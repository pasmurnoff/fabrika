import filterPriceVisual from './visual';
import formatStr from './formatString';
import filterStep from './filter-step';

export default function () {
    filterPriceVisual();
    let slider = document.getElementById('priceFilter'),
        step = slider.step,
        max = slider.max,
        min = slider.min,
        output = document.getElementById('priceDemo'),
        perOne = document.getElementById('perOne'),
        endSum = document.getElementById('endSum'),
        discount = document.getElementById('priceDiscount');

    const PRICE = perOne.innerHTML;
    let anotherPrice = PRICE * (max - slider.value * 0.3) / max;
    perOne.innerHTML = anotherPrice;
    output.innerHTML = formatStr(slider.value);
    endSum.innerHTML = formatStr(PRICE * slider.value);
    discount.innerHTML = formatStr(PRICE * slider.value - anotherPrice * slider.value);

    slider.oninput = function () {
        output.innerHTML = formatStr(this.value);
        anotherPrice = PRICE * (max - this.value * 0.3) / max;
        perOne.innerHTML = anotherPrice;
        endSum.innerHTML = formatStr(this.value * anotherPrice);
        discount.innerHTML = formatStr(this.value * PRICE - this.value * anotherPrice);
    }

    /* filter step */
    filterStep(min, max, step);
}