export default function () {
    if ($(window).width() < 768) {
        const blockOrderWrapper = $('.block-order__wrapper'),
            blockOrderNav = $('.block-order__nav');

        if (blockOrderWrapper.length)
            blockOrderWrapper.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                asNavFor: '.block-order__nav',
                autoplay: true,
            });

        if (blockOrderNav.length)
            blockOrderNav.slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                asNavFor: '.block-order__wrapper',
                centerMode: true,
                focusOnSelect: true,
            });
    }
}