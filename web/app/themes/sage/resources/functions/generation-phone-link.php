<?php
function generationPhoneLink($phone): string
{
    //удяляем все кроме цифр
    $phone_href = preg_replace('~[^0-9]+~', '', $phone);
    //если телефон указали на +7, то наш "+" удалился, ставим его обратно
    if ($phone{0} == '+') {
        $phone_href = '+'.$phone_href;
    }
    return 'tel:' . $phone_href;
}
