jQuery(document).ready(function ($) {
    var $track = $('.cdek__code');
    var $cdekAlert = $('.cdek__alert');
    $('.cdek__submit').on('click', function () {
        if ($track && $track.val() != '') {
            window.open('https://www.cdek.ru/track.html?order_id=' + $track.val(), '_blank');
            $cdekAlert.hide('100');
        } else if ($track.val() == '') {
            $cdekAlert.show('100');
        }
    });
});