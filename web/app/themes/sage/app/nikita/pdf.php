<?php
require ('vendor/autoload.php');
$order_number = @file_get_contents('number.txt') | 0;
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors',1);

file_put_contents('number.txt',++$order_number);
$item = [
	'style' => 'Наименование',
	'price' => '5000 руб',
	'term' => 'Неделя',
	'compose' => 'Состав',
	'qty' => 'Количество',
	'size' => 'Размер',
];
$item['images'] = [
    'https://fabrikanoskov.ru/wp-content/uploads/2019/08/IMG_2436-1-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/09/IMG_0086-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/09/IMG_0086-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/09/IMG_0086-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/09/IMG_0086-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/09/IMG_0086-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/09/IMG_0086-600x600.jpg',
    'https://fabrikanoskov.ru/wp-content/uploads/2019/11/IMG_0306-600x600.jpg'
];
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4',
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 30,
    'margin_bottom' => 10,
    'margin_header' => -10,
    'margin_footer' => 5,
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/fonts/',
    ]),
    'fontdata' => $fontData + [
            'calibri' => [
                'R' => 'CALIBRI.TTF',
                'B' => 'CALIBRIB.TTF',
            ]
        ],
    'default_font' => 'calibri'

]);
ob_start();
include('./test_template.php');
$content = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML($content);
$mpdf->Output();