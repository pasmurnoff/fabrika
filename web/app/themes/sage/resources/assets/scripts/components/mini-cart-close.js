$('.closeminicart').on('click', function () {
    const block = $(this).data('minicart');
    $('.' + block).removeClass('active');
    $('.overlay').removeClass('active');
});