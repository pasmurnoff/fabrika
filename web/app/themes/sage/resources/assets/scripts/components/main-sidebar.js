$('body').on('click', '.menu-item-has-children', function (e) {
    if ($(window).width()<1024) {
        e.stopPropagation();
        if (e.target.tagName !== 'A') {
            $(this).toggleClass('active');
            $(this).children('.sub-menu').animate({height: 'toggle'});
        }
    }
});