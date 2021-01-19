<?php
function checkIfProductInWishlist($productId)
{
    $wishlistIds = [];

    if (is_user_logged_in()) {
        $wishlistIds = is_array(getUserList()) ? getUserList() : [getUserList()];
    } else {
        if(isset($_COOKIE['wishlist']) && $_COOKIE['wishlist'] !== '') {
            $wishlistIds = explode(',', $_COOKIE['wishlist']);
        }
    }

    if (($key = array_search($productId, $wishlistIds)) !== false) {
        return true;
    } else {
        return false;
    }
}

function isEmptyWishlist() {
    $list = get_user_meta(get_current_user_id(), 'wishlist', true);
    return $list == '' || empty($list) ? true : false;
}

function getWishlistCount() {
    $wishlistIds = isset($_COOKIE['wishlist']) && $_COOKIE['wishlist'] !== ''  ? explode(',', $_COOKIE['wishlist']) : [];

    if(get_current_user_id()) {
        $wishlistIds = getUserList();
    }

    return count($wishlistIds);
}

// print_r(getWishlistCount());
// wp_die();