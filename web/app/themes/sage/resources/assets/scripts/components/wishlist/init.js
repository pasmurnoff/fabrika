import {fetchWishlist} from './fetchWishlist';
import {infoPopup} from './info-popup/init';
import toggleWishlist from './toggleWishlist';

export default function () {
    $(document).on('click', '.wishlist__like, .wishlist-block__item-remove-btn', function (e) {
        e.preventDefault();
        const product_id = $(this).data('product-id');

        fetchWishlist(product_id, $(this)).then(result => {
            if(result.status == 'auth_required') {
                let res  = toggleWishlist(product_id);
                result.message = res.message;
                result.status = res.status;
                result.count = res.count;

                if($(this)[0].hasAttribute('data-parent') && res.status == 'deleted' && $(`.${$(this).attr('data-parent')}`).length - 1 == 0) {
                    result.liststatus = 'empty';
                }
            }

            if($(this)[0].hasAttribute('data-parent') && result.status == 'deleted' && $('body').hasClass('page-wishlist')) {
                const parent = $(this).parents(`.${$(this).attr('data-parent')}`);

                parent.fadeOut('600', function() {
                    $(this).remove();

                    if(result.liststatus == 'empty') {
                        $('.wishlist-block').html(result.render)
                    }
                })
            }

            infoPopup(result.message);
            setWishlistCount(result.count)
            toggleButtons($(`.wishlist__like[data-product-id="${product_id}"]`));
        },
        error => infoPopup(error.message))
    })
}

function toggleButtons (buttons) {
    buttons.each(function () {
        if ($(this).hasClass('added')) {
            $(this).removeClass('added');
            $(this).addClass('deleted');
        } else if ($(this).hasClass('deleted')) {
            $(this).removeClass('deleted');
            $(this).addClass('added');
        }
    });
}

function setWishlistCount(count) {
    $('.wishlist-counter').text(count);
}
