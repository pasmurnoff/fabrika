export default {
    init() {
        if($('#billing_country').length && !$('#billing_country').hasClass('select2-hidden-accessible')) {
            $('#billing_country').select2();
        }
        
        let items = '.form-row input, .form-row textarea, .form-row select';

        $(items).each(function() {
            let $label = $(this).parents('.form-row').find('label');
            $(this).val() !== '' ? setLabelActive($label) : disableLabel($label);
        })

        
        $('body').on('focus', '.form-row input, .form-row textarea', function () {
            setLabelActive($(this).parents('.form-row').find('label'));
        }).on('blur', '.form-row input, .form-row textarea', function () {
            let $label = $(this).parents('.form-row').find('label');
            $(this).val() !== '' ? setLabelActive($label) : disableLabel($label);
        });
    },
};

function setLabelActive(label) {
    label.addClass('label_filled');
}

function disableLabel(label) {
    label.removeClass('label_filled');
}