<?php
function send_mail()
{
    $subject = 'Форма с сайта fabrikanoskov.ru';
    $headers = array('Content-Type: text/html; charset=UTF-8');

    if (isset($_POST['director'])) {
        $to = 'director@fabrikanoskov.ru';
    } else
        $to = 'mail@fabrikanoskov.ru';

    $html = '';

    //count_model
    $replace_keys = [
        'name'     => 'Имя',
        'phone'    => 'Телефон',
        'email'    => 'Email',
        'email_r'  => 'Email',
        'question' => 'Вопрос',
        'model-quantity' => 'Количество моделей',
        'one-model-quantity' => 'Количество одной модели',
        'information' => 'Количество одной модели',
    ];

    foreach ($_POST as $key => $value) {
        if (!empty($_POST[$key]))
            if (is_array($value)) {
                $html .= '<span>' . $key . '</span>' . ': ';
                foreach ($value as $item) {
                    if ($item == end($value)) {
                        $html .= '<span>' . $item . '</span><br>';
                    } else {
                        $html .= '<span>' . $item . '</span>, ';
                    }
                }
            } else {
                $title = (empty($replace_keys[$key])) ? $key : $replace_keys[$key];
                $html .= '<strong>' . $title . '</strong>' . ': ' . '<span>' . $value . '</span><br>';
            }
    }


    if (!function_exists('wp_handle_upload')) {
        require_once(ABSPATH . 'wp-admin/includes/file.php');
    }

    $uploadedfile = $_FILES['Attached'];
    $upload_overrides = array('test_form' => false);
    $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

    if ($movefile) {
        $attachments = $movefile['file'];
        wp_mail($to, $subject, $html, $headers, $attachments);
    } else {
        echo "Possible file upload attack!\n";
    }


    die();
}

function htm_mail_name($email)
{
    return 'Фабрика носков';
}

add_filter('wp_mail_from_name', 'htm_mail_name');


function htm_mail_from($email)
{
    return 'mail@fabrikanoskov.ru';
}

add_filter('wp_mail_from', 'htm_mail_from');

add_action("wp_ajax_send_mail", "send_mail");
add_action("wp_ajax_nopriv_send_mail", "send_mail");

