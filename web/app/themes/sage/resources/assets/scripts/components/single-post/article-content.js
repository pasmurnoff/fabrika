export default function () {
    const $titles = $('.blog_single h3');

    $titles.length > 0 ? $titles.each(function (index) {
        let $item = $(this).clone();

        $(this).wrap(function () {
            return '<div id="paragraph' + index + '">';
        })
        $('<a class="text article__content-item" href="#paragraph' + index + '">' + $item.html() + '</a>')
            .appendTo('.article__list')

    }) && $('.article__content').removeClass('hidden') : '';
}
