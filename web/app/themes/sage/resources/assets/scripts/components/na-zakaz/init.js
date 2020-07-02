export default function () {
    if ($(window).width() < 768) {
        $('.block-order__wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: '.block-order__nav',
            autoplay: true,
        });
        $('.block-order__nav').slick({
            slidesToShow: 4,
            slidesToScroll: 4,
            asNavFor: '.block-order__wrapper',
            centerMode: true,
            focusOnSelect: true,
        });
    }
}