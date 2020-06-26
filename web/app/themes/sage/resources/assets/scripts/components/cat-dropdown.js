$('.current-cat').children('a').addClass('current-link');
$('.cat-parent.current-cat-parent, .current-cat.cat-parent').addClass('active');
$('body').on('click', '.cat-parent', function (e) {
    e.stopPropagation();
    if (e.target.tagName !== 'A') {
        $(this).toggleClass('active');
        $(this).children('.children').animate({height: 'toggle'});
    }
});