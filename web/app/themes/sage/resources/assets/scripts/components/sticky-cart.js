export default function sticky() {
    const wrapper = $('.single-product'),
        stickyPhone = $('.mswipe__trigger');

    function stickyCart() {
        $(window).scrollTop() >= $('.single_variation_wrap').offset().top ? wrapper.addClass('sticky_active') : wrapper.removeClass('sticky_active');
        wrapper.hasClass('sticky_active') ? stickyPhone.css({bottom: $('.sticky-cart').height() + 15}) : stickyPhone.css({bottom: ''});
    }

    stickyCart();
    $(window).on('scroll', function () {
        stickyCart();
    });
}