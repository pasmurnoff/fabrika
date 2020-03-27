jQuery(document).ready(function ($) {
    $('.form').submit(function (e) {
        e.preventDefault();
        let inputName = $(this).attr('name');
        let inputData = $('input[name=' + inputName + ']');
        $.ajax({
            type: 'POST',
            url: '/app/themes/sage/resources/functions/ajax.php',
            data: inputData.serialize(),
            success: function (data) {
                $(inputData).html(data);
            },
        });
        return false;
    });
});