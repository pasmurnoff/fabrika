$('.order__select').selectWoo();

$(document).on('click', '.selection', function (){
    $('.select2-results__options ').css({right: -$('.select2-selection--single').width()});
});
