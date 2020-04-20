jQuery(document).ready(function () {
    /* Show modal popup */
    $('.callpopup').on('click', function () {
        const block = $(this).data('popup');
        $('.' + block).addClass('active');
        $('.overlay').addClass('active');
    });

    /* Hide modal popup */
    $('.closepopup').on('click', function () {
        const block = $(this).data('popup');
        $('.' + block).removeClass('active');
        $('.overlay').removeClass('active');
    })
});
