<?php

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

echo $html;

$attachment = [];

var_dump($_FILES);

