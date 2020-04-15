<?php
if (is_product()) {
    if (isset($_COOKIE['watched'])) {
        $watchedProducts = [];
        foreach ($_COOKIE['watched'] as $watchedId) {
            array_push($watchedProducts, $watchedId);
            if (count($watchedProducts) == 13 && (!in_array($post->ID, $watchedProducts))) {
                setcookie('watched[' . $watchedProducts[0] . ']', $watchedProducts[0], time() - 31556926, '/');
            }
        }
    }
    setcookie('watched[' . $post->ID . ']', $post->ID, time() + 31556926, '/');
}
