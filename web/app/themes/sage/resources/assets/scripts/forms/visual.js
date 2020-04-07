$(document).ready(function () {
    $('.labelwrap').on('focusout', function () {
        let $label = $(this).find('.label'),
            $input = $(this).find('.input, .textarea');
        $input.val() !== '' ? $label.addClass('label_filled') : $label.removeClass('label_filled');
    }).on('click', function () {
        $(this).find('.label').addClass('label_filled');
    });
});

