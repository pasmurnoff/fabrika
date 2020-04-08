$('body').on('focusout', '.labelwrap', function () {
    let $label = $(this).find('.label'),
        $input = $(this).find('.input, .textarea');
    $input.val() !== '' ? $label.addClass('label_filled') : $label.removeClass('label_filled');
}).on('click', '.labelwrap', function () {
    $(this).find('.label').addClass('label_filled');
});

