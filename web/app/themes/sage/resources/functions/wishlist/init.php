<?php
require_once __DIR__  . '/utils.php';
require_once __DIR__  . '/addLocalToUser.php';

function getUserList() {
    $current_user = get_current_user_id();
    $list = get_user_meta($current_user, 'wishlist', true);

    if ($list) {
        foreach ($list as $key => $value) {
            if (empty($value)) {
                unset($list[$key]);
            }
        }
    }

    return $list;
}

function toggleWishlist() {
    $current_user = get_current_user_id();
    $response = '';

    if(!$current_user) {
        $response = [
            'message' => 'Пользователь не авторизован',
            'status' => 'auth_required',
            'render' => \App\template('components.wishlist.empty')
        ];
    } else {
        $wishlist_products = is_array(getUserList()) ? getUserList() : [getUserList()];
        $product_id = $_POST['product_id'];

        if (($key = array_search($product_id, $wishlist_products)) !== false) {
            unset($wishlist_products[$key]);
            delete_user_meta($current_user, 'wishlist');
            update_user_meta($current_user, 'wishlist', $wishlist_products);
            $response = [
                'message' => 'Товар удален из списка желаний',
                'status' => 'deleted',
                'liststatus' => isEmptyWishlist() ? 'empty' : 'ok',
                'render' => \App\template('components.wishlist.empty')
            ];
        } else {
            $wishlist_products[] = $product_id;
            delete_user_meta($current_user, 'wishlist');
            update_user_meta($current_user, 'wishlist', $wishlist_products);
            $response = [
                'message' => 'Товар добавлен в список желаний',
                'status' => 'added',
            ];
        }
    }

    if($response['status'] !== 'auth_required') {
        $response['count'] = getWishlistCount();
    }

    echo wp_json_encode($response);
    die();
}

function getEmptyWishlistPage() {
    return \App\template('components.wishlist.empty');
}

add_action('wp_ajax_fetch_toggle_wishlist', 'toggleWishlist');
add_action('wp_ajax_nopriv_fetch_toggle_wishlist', 'toggleWishlist');

add_action('wp_ajax_get_empty_wishlist_page', 'getEmptyWishlistPage');
add_action('wp_ajax_nopriv_get_empty_wishlist_page', 'getEmptyWishlistPage');

