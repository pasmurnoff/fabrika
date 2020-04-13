<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
} else {
    http_response_code(403);
    echo "Что-то пошло не так";
}
