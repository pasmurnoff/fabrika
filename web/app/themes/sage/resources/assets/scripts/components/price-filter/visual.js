export default function filterPriceVisual() {
    $(function () {
        let sliderElement = $('.price-filter__input');
        sliderElement.each(function () {
            let percent = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min')) * 100;
            $(this).siblings('.price-filter__upper-fill').width((100 - percent) + '%');
            if (navigator.userAgent.indexOf('Chrome') === -1 && navigator.userAgent.indexOf('Firefox') === -1 && navigator.userAgent.indexOf('Safari') === -1) {
                $(this).change(function (event) {
                    adjustSlider(event)
                })
            } else {
                $(this).on('input', function (event) {
                    adjustSlider(event)
                })
            }
        })
    })

    function adjustSlider(event) {
        let $target = $(event.target),
            percent = ($target.val() - $target.attr('min')) / ($target.attr('max') - $target.attr('min')) * 100;
        $target.siblings('.price-filter__upper-fill').width(`calc(${100 - percent}%`)
    }
}