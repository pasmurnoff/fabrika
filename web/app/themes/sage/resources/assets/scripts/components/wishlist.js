jQuery(document).ready(function ($) {
    $(document).on('added_to_wishlist removed_from_wishlist', function () {
        var counter = $('.wishlist-counter');
        $.ajax({
            /* eslint-disable */
            url: yith_wcwl_l10n.ajax_url,
            /* eslint-enable */
            data: {
                action: 'yith_wcwl_update_wishlist_count',
            },
            dataType: 'json',
            success: function (data) {
                counter.html(data.count);
            },
            complete: function () {
                counter.unblock();
            },
        })
    })
});