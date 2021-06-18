<?php
function send_review()
{
    $subject = 'Новый отзыв на сайте fabrikanoskov.ru';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    //$to = 'mail@fabrikanoskov.ru';
    $to = 'malikov.kzn@gmail.com';

    // вставляем запись в базу данных
    $post_id = wp_insert_post(wp_slash([
        'post_title'    => sanitize_text_field($_POST['review_author']),
        'post_content'  => $_POST['review_body'],
        'post_status'   => 'draft', // черновик
        'post_type'     => 'review',
        //'meta_input'    => [ 'meta_key'=>'meta_value' ],
    ]));

    // оценка
    $review_rating = (int) $_POST['review_rating'];
    update_field('review_rating', $review_rating, $post_id);

    // изображение
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    $attachment_id = media_handle_upload('review_image', $post_id);
    update_field('review_img', $attachment_id, $post_id);

    // должность и организация
    update_field('review_position', $_POST['review_position'], $post_id);
    update_field('review_organization', $_POST['review_organization'], $post_id);

    // отправляем письмо
    $mail_body = 'На сайт был добавлен новый отзыв, который ожидает публикации -> <a href="'. $_SERVER['HTTP_REFERER'] . 'wp/wp-admin/post.php?post=' . $post_id . '&action=edit' .'">Посмотреть</a>';
    wp_mail($to, $subject, $mail_body, $headers);

    wp_die();
}

add_action("wp_ajax_send_review", "send_review");
add_action("wp_ajax_nopriv_send_review", "send_review");
