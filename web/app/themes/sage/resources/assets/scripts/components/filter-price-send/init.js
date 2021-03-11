export default function filterPriceSend()
{
    $('.price_slider').on('slidechange', function () {
        $('form#filter_by_price').submit();
    });
}