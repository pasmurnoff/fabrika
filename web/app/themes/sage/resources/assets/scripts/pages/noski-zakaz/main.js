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

$(document).ready(function () {
    $('form').submit(function (e) {
        e.preventDefault();
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: 'POST',
            url: '/app/themes/sage/functions/noski-zakaz/form.php',
            data: formNm.serialize(),
            success: function (data) {
                $(formNm).html(data);
            },
        });
        return false;
    });
});