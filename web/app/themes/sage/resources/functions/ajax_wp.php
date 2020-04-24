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
                $html .= '<span>' . $key . '</span>' . ': ' . '<span>' . $value . '</span><br>';
            }
    }


    $attachments = [];

    foreach ($_FILES as $item)
        foreach ($item['name'] as $name)
            $attachments[] = $name;


    wp_mail($to, $subject, $html, $headers, $attachments);
    var_dump($html, $attachments);
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

