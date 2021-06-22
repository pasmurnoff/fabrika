<?php
function upload_this_attachment($file_handler, $post_id)
{
    // продолжаем, только если файлы успешно загружены
    if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) {
        __return_false();
    }

    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');

    return media_handle_upload($file_handler, $post_id); // возвращаем id файла из библиотеки
}

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

    // изображения
    $images = []; // сюда сложим id картинок
    if ($_FILES) {
        $attachments = $_FILES["review_images"];
        foreach ($attachments['name'] as $key => $value) {
            if ($attachments['name'][$key]) {
                $file = array(
                    'name' => $attachments['name'][$key],
                    'type' => $attachments['type'][$key],
                    'tmp_name' => $attachments['tmp_name'][$key],
                    'error' => $attachments['error'][$key],
                    'size' => $attachments['size'][$key]
                );
                $_FILES = array ("my_file_upload" => $file);
                foreach ($_FILES as $file => $array) {
                    $images[] = upload_this_attachment($file, $post_id);
                }
            }
        }
    }
    update_field('review_img', $images, $post_id);

    // должность и организация
    update_field('review_position', $_POST['review_position'], $post_id);
    update_field('review_organization', $_POST['review_organization'], $post_id);

    // отправляем письмо
    $mail_body = 'На сайт был добавлен новый отзыв, который ожидает публикации -> <a href="//'. $_SERVER['HTTP_HOST'] . '/wp/wp-admin/post.php?post=' . $post_id . '&action=edit' .'">Посмотреть</a>';
    wp_mail($to, $subject, $mail_body, $headers);

    wp_die();
}

add_action("wp_ajax_send_review", "send_review");
add_action("wp_ajax_nopriv_send_review", "send_review");
