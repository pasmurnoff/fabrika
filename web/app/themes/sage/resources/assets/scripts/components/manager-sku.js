$('.sku__toggle_plus').on('click', function () {
    let $field =
        '<div class="sku__item"><div class="labelwrap mrgn15-top">' +
        $('.sku__element').clone().removeClass('mrgn15-top').html() + '</div>' +
        $('.sku__minus').html() +
        '</div>';
    $('.sku__items').append($field);
});

$('body').on('click', '.sku__toggle_minus', function () {
    $(this).parent().remove();
});