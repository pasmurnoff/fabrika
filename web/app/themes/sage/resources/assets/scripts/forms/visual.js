export default function visualLabel()
{
    const form = $('.form');

    form.on('focus', '.input, .textarea', function () {
        $(this).parent().find('.label').addClass('label_filled');
    })

    form.on('blur', '.input, .textarea', function () {
        if ($(this).val().trim() === '' && $(this).val().trim().length === 0) {
            $(this).parent().find('.label').removeClass('label_filled');
        }
    })
}
