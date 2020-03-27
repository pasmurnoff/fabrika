$(document).ready(function () {
    const $constCount = $('.quantity_result '),
        $constNumOne = $('input[name=model-quantity]'),
        $constNumTwo = $('input[name=one-model-quantity]');

    $constCount.text($constNumOne.val() * $constNumTwo.val());

    $('input[name=model-quantity], input[name=one-model-quantity]').on('change', function () {
        $constCount.text($constNumOne.val() * $constNumTwo.val());
    });

    $('.number__counter_minus, .number__counter_plus').on('click', function () {
        $constCount.text($constNumOne.val() * $constNumTwo.val());
    });
});