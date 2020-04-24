/**
 * Custom Socks events
 */


$(document).ready(function () {
    $('.container').removeClass('preload');
    $('.custom__bg-img').animate({
        'background-position-x': '750px',
        'background-position-y': '750px',
    }, 200000, 'linear');


    const inputs = $('.custom__field-input');

    inputs.focusout(function () {
        $(this).val() !== '' ? $(this).siblings('.custom__field-name').addClass('active') : $(this).siblings('.custom__field-name').removeClass('active');
    });

    inputs.focus(function () {
        if ($(this).val() !== '') {
            $(this).siblings('.custom__field-name').addClass('active');
        } else {
            $(this).siblings('.custom__field-name').toggleClass('active');
        }
    })
});

function dynamicAnimate(elem) {
    elem.animate({opacity: 'toggle'}).delay(2000).animate({opacity: 'toggle'});
}


$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: 'POST',
            url: window.wp_data.ajax_url + '?action=send_message',
            data: formNm.serialize(),
            success: function () {
                let $resultForm = $('<div class="result-message custom__text custom__text_success">Ваши данные успешно отправлены</div>').hide();
                $('body').append($resultForm);
                dynamicAnimate($resultForm);
            },
            error: function () {
                let $resultForm = $('<div class="result-message custom__text custom__text_dangerous">Что-то пошло не так, попробуйте в другой раз</div>').hide();
                $('body').append($resultForm);
                dynamicAnimate($resultForm);
            },
        });
        return false;
    });
});