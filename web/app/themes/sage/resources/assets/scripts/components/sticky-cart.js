export default function sticky() {
    const wrapper = $('.single-product'),
        stickyPhone = $('.mswipe__trigger'),
        javosite = $('.wrap_0b7');

    function changeParam(elem, param, bool) {
        const bottom = $('.sticky-cart').height() + 15;
        bool ? elem.attr('style', param + ':' + bottom + 'px !important') : elem.removeAttr('style');
    }

    function stickyCart() {
        $(window).scrollTop() >= $('.single_variation_wrap').offset().top ? wrapper.addClass('sticky_active') : wrapper.removeClass('sticky_active');
        (wrapper.hasClass('sticky_active') && $(window).width() < 588) ?
            changeParam(stickyPhone, 'bottom', true) && changeParam(javosite, 'bottom', true) :
            changeParam(stickyPhone, '', false) && changeParam(javosite, '', false);
    }

    stickyCart();
    $(window).on('scroll', function () {
        stickyCart();
    });
}