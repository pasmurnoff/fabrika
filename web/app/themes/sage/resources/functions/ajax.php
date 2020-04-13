<?php
function multi_attach_mail($to, $subject, $message, $senderEmail, $senderName)
{
    $from = $senderName . " <" . $senderEmail . ">";
    $headers = "From: $from";
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// Multipart boundary
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";

// File content
    foreach ($_FILES as $key => $value) {
        if (!empty($value['name'])) {
            $file_name = basename($value['name']);
            $file_size = $value['size'];

            $message .= "--{$mime_boundary}\n";
            $fp = @fopen($value['name'], "rb");
            $data = @fread($fp, $file_size);
            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"" . $file_name . "\"\n" .
                "Content-Description: " . $file_name . "\n" .
                "Content-Disposition: attachment;\n" . " filename=\"" . $file_name . "\"; size=" . $file_size . ";\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }

    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $senderEmail;

// Send email
    $mail = @mail($to, $subject, $message, $headers, $returnpath);
    echo $message;

// Return true, if email sent, otherwise return false
    if ($mail) {
        return true;
    } else {
        return false;
    }
}

// Email configuration
$to = 'recipient@example.com';
$from = 'fabrika@example.com';
$fromName = 'Фабрика носков';

// Html content
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

$subject = 'Сообщение с сайта Фабрика носков';

$sendEmail = multi_attach_mail($to, $subject, $html, $from, $fromName);
var_dump($sendEmail);

// Email sending status
if ($sendEmail) {
    echo 'The email has sent successfully.';
} else {
    echo 'Mail sending failed!';
}
