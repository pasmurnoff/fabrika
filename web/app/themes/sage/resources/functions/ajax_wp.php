<?php
function send_mail()
{
    $from = 'Фабрика носков <myname@mydomain.com>';
    $headers = "From: $from";
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
    $to = 'mail@fabrikanoskov.ru';
    $subject = 'Форма с сайта fabrikanoskov.ru';

    $html = '<br>';

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

    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $html . "\n\n--{$mime_boundary}--";

    $attachments = [];

    foreach ($_FILES as $item)
        foreach ($item['name'] as $name)
            $attachments[] = $name;


    wp_mail($to, $subject, $message, $headers, $attachments);
    var_dump($message);
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

