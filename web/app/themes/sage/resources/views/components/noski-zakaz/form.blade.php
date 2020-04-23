@php
    function send_message() {
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $subject = 'Заявка www.fabrikanoskov.ru';
            $name = '';
            $phone = '';
            $email = '';
            $company = '';
            $budget = '';
            if (!empty($_POST['name'])) {
                $name = $_POST['name'];
            }

            if (!empty($_POST['phone'])) {
                $phone = $_POST['phone'];
            }
            if (!empty($_POST['email'])) {
                $email = $_POST['email'];
            }
            if (!empty($_POST['company'])) {
                $company = $_POST['company'];
            }
            if (!empty($_POST['budget'])) {
                $budget = $_POST['budget'];
            }

            $styles = "";
            if (!empty($_POST['stylesocks'])) {
                foreach ($_POST['stylesocks'] as $style) {
                    $styles .= $style . ', ';
                }
            }


            $to = "mail@fabrikanoskov.ru";
            $headers = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: Фабрика носков <mail@fabrikanoskov.ru>\r\n";
            $message = "Имя: " . $name . "\r\nТелефон: " . $phone . "\r\nEmail: " . $email . "\r\nКомпания: " . $company . "\r\nБюджет: " . $budget . "\r\nИнтересовался: " . $styles;
             mail($to, $subject, $message, $headers);
        }
    }
@endphp
