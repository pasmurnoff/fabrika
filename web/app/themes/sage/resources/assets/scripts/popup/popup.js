jQuery(document).ready(function () {
    /* Show support-modal popup */
    $('.callpopup').on('click', function () {
        const block = $(this).data('popup');
        $('.' + block).addClass('active');
        $('.overlay').addClass('active');
    });

    /* Hide support-modal popup */
    $('.closepopup').on('click', function () {
        const block = $(this).data('popup');
        $('.' + block).removeClass('active');
        $('.overlay').removeClass('active');
    })
});
