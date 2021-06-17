export default function () {
    $('.slider-big__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.slider-big__arrow-left'),
        nextArrow: $('.slider-big__arrow-right'),
        infinite: false,
        dots: true,
    });
}