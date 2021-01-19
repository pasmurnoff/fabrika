<?php
add_action( 'wp_login', 'addLocalWishlistToUser', 10, 2 );
function addLocalWishlistToUser( $user_login, $user ){
    if(isset($_COOKIE['wishlist']) && $_COOKIE['wishlist'] !== '') {
        $localWishlist = explode(',', $_COOKIE['wishlist']);
        $userWishList = get_user_meta($user->ID, 'wishlist', true);
        $wishList = [];

        if($userWishList && $userWishList !== '' && !empty($userWishList)) {
            $wishList = array_merge($localWishlist, $userWishList);
            $wishList = array_unique($wishList);
        } else {
            $wishList = $localWishlist;
        }

        update_user_meta($user->ID, 'wishlist', $wishList);
        unset($_COOKIE['wishlist']);
        setcookie('wishlist', null, -1, '/');
    }
}
