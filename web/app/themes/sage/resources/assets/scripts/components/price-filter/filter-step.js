export default function filterStep(min, max, step) {
    const count = (max - min) / step + 1;
    let i = 1;
    while (i <= count) {
        $('.price-filter__values').append('<div class="price-filter__value">' + i * step + '</div>')
        i++
    }
}