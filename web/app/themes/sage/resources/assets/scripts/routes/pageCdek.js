export default {
    init() {
        let $track = $('.cdek__input');
        let $cdekAlert = $('.cdek__alert');
        $('.cdek__submit').on('click', function (e) {
            if ($track && $track.val() != '') {
                window.open('https://www.cdek.ru/track.html?order_id=' + $track.val(), '_blank');
                $cdekAlert.animate({opacity: 'toggle'});
            } else if ($track.val() == '') {
                e.preventDefault();
                $cdekAlert.animate({opacity: 'toggle'}, 200, function f() {
                    $cdekAlert.delay(1000).animate({opacity: 'toggle'});
                });
            }
        });
    },
};
