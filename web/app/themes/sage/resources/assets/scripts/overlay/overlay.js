jQuery(document).ready(function () {
    /* Close popups and sidebars by overlay */
    $('.overlay').on('click', function () {
        $(this).removeClass('active');
        $('.popup.active').removeClass('active');
        $('.sidebar.active').removeClass('active');
        $('.mini-cart.active').removeClass('active');
        $('.togglesidebar.active').removeClass('active');
        $('body').removeClass('close_jivo');
    });
});