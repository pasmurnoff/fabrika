export default function () {
    const $titles = $('.blog_single h3, .blog_single p strong');

    $titles.length > 0 ? $titles.each(function (index) {
        let $item = $(this).clone();

        $(this).wrap(function () {
            return '<div id="paragraph' + index + '">';
        })
        $('<li class="article__content-item"><a class="text" href="#paragraph' + index + '">' + $item.html() + '</a></li>')
            .appendTo('.article__list')

    }) && $('.article__content').removeClass('hidden') : '';
}
