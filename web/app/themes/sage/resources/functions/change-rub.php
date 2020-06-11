<?php
add_filter('woocommerce_currency_symbol', 'change_rub_currency_symbol', 10, 2);
function change_rub_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case'RUB':
            $currency_symbol = '₽';
            break;
    }
    return $currency_symbol;
}