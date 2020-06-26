import filterPriceVisual from './visual';

export default function () {
    filterPriceVisual();
    let slider = document.getElementById('priceFilter'),
        output = document.getElementById('priceDemo');
    output.innerHTML = slider.value;

    slider.oninput = function () {
        output.innerHTML = this.value;
    }
}