export const fetchWishlist = (product_id, $this) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: window.wp_data.ajax_url,
            type: 'post',
            data: {
                action: 'fetch_toggle_wishlist',
                product_id,
            },
            beforeSend: () => {
                $this.addClass('loading')
            },
            success: (data) => {
                $this.removeClass('loading');
                resolve($.parseJSON(data));
            },
            error: (err) => {
                console.error(err);
                reject({message: 'Ошибка'});
            },
        })
    });
};

