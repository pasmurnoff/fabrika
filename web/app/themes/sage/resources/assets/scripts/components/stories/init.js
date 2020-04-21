let distance = 160,
    box = $('.stories__wrapper_scroll');
$('.stories__arrow').on('click', function () {
    box.stop().animate({
        scrollLeft: '+=' + (distance * $(this).data('factor')),
    }, 200);
});