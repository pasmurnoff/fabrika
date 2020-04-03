$('.single_add_to_cart_button').click(function (e) {
    e.preventDefault();
    jQuery.ajax({
        /* eslint-disable */
        url: woocommerce_params.ajax_url,
        /* eslint-enable */
        type: 'post',
        data: {
            'action': 'mode_theme_update_mini_cart',
        },
        success: function (response) {
            $('#mini-cart-container').html(response);
        },
    });
});
