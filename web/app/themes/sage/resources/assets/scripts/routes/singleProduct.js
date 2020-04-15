/* Sticky cart for product */
export default {
    init() {
        const wrapper = $('.single-product');

        function stickyCart() {
            $(window).scrollTop() >= $('.single_variation_wrap').offset().top ? wrapper.addClass('sticky_active') : wrapper.removeClass('sticky_active');
        }

        stickyCart();
        $(window).on('scroll', function () {
            stickyCart();
        });
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
