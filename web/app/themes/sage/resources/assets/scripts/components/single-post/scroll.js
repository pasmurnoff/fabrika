export default function () {
    $('.blog_single').on('click', '.article__content-item a', function (e) {
        e.preventDefault();
        let id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });
}