<?php
function custom_my_account_menu_items($items)
{
    unset($items['downloads']);
    return $items;
}

add_filter('woocommerce_account_menu_items', 'custom_my_account_menu_items');

/*********************************************************************************************/
/**
 * /*********************************************************************************************/

add_filter('woocommerce_form_field_args', 'wc_form_field_args', 10, 3);

function wc_form_field_args($args, $key, $value = null)
{

    switch ($args['type']) {
        /*case "password" :
        case "text" :
        case "email" :
        case "tel" :
        case "number" :
            $args['class'][] = 'form-group';
            //$args['input_class'][] = 'form-control input-lg'; // will return an array of classes, the same as bellow
            $args['input_class'] = array('form-control', 'input-lg');
            $args['label_class'] = array('control-label');
            break;

        case 'textarea' :
            $args['input_class'] = array('form-control', 'input-lg');
            $args['label_class'] = array('control-label');
            break;

        case 'checkbox' :
            break;

        case 'radio' :
            break;*/

        default :
            $args['input_class'] = array('input');
            $args['label_class'] = array('field__label');
            break;
    }

    return $args;
}