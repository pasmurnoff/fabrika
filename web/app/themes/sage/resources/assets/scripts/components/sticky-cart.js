export default function sticky() {
    const wrapper = $('.single-product');

    const stickyCart = () => {
        const variatonWrap = $('.single_variation_wrap');
        if (variatonWrap.length) {
            $(window).scrollTop() >= variatonWrap.offset().top ? wrapper.addClass('sticky_active') : wrapper.removeClass('sticky_active');
        }
    }

    stickyCart();
    $(window).on('scroll', function () {
        stickyCart();
    });
}