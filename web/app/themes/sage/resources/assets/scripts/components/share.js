export default function () {
    const shareToggle = $('.share__toggle');
    shareToggle.on('click', function () {
        $(this).next().animate({opacity: 'toggle'}).parent().toggleClass('active');
    })

    $(document).mouseup(function (e) {
        var div = $('.share');
        if (div.hasClass('active') && !div.is(e.target)
            && div.has(e.target).length === 0) {
            div.toggleClass('active')
                .children('.share__block').animate({opacity: 'toggle'});
        }
    });
}
