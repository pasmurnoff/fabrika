<?php
function send_mail()
{
    $headers = 'From: Фабрика носков <myname@mydomain.com>' . "\r\n";
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


    $attachments = [];

    foreach ($_FILES as $item)
        foreach ($item['name'] as $name)
            $attachments[] = $name;


    wp_mail($to, $subject, $html, $headers, $attachments);
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

