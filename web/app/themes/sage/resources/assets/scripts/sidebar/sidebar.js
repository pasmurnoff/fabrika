jQuery(document).ready(function () {
    /* Toggle sidebars */
    $('.togglesidebar').on('click', function () {
        const block = $(this).data('sidebar');
        $('.' + block).toggleClass('active');
        $('.overlay').toggleClass('active');
    });
});
