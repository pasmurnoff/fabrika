$(document).ready(function () {
    let $submitCdek = $('.submit_cdek');
    let $trackCdek = $('.input_cdek');

    $submitCdek.on('click', function () {
        if ($trackCdek && $trackCdek.val() != '') {
            window.open('https://www.cdek.ru/track.html?order_id=' + $trackCdek.val(), '_blank');
            $('.alert').hide('100');
        } else if ($trackCdek.val() == '') {
            $('.alert').show('100');
        }
    });
});
