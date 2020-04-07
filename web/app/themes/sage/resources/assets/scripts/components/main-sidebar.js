$('body').on('click', '.menu-item-has-children', function (e) {
    e.stopPropagation();
    if (e.target.tagName !== 'A') {
        $(this).toggleClass('active');
        $(this).children('.sub-menu').animate({height: 'toggle'});
    }
});