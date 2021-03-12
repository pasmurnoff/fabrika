{{--
  Template Name: Генерация прайс листа
--}}
<?php
$categories = get_terms(
    [
        'taxonomy'   => 'product_cat',
        'hide_empty' => false,
        'parent'     => 0, //только родители
        //'fields'     => 'id=>slug' //генерит массив только из id и имени
        'pad_counts' => true, //коллич записей себя и детей
    ]
);



foreach ($categories as $category) {
    if (!$category->count) {
        continue; //если товаров нет в категории, то перескакиваем
    }

    echo '<h1>';
    echo $category->name;
    echo '</h1>';
    echo $category->slug;
    echo '<br>';
    echo $category->count;

    $products = wc_get_products([
        'post_status' => 'publish',
        'posts_per_page' => -1, // количество товаров для отображения
        'product_cat'    => 'zhenskoe',
    ]);

    foreach ($products as $product) {
        echo $product->get_sku();
        echo '<br>';
        echo $product->get_title();
        echo '<br>';
        echo $product->get_price();
        echo '<hr>';
    }
}




//$products = wc_get_products([
//    'post_status' => 'publish',
//    'posts_per_page' => -1, // количество товаров для отображения
//    'product_cat'    => 'zhenskoe'
//]);

echo '<pre>';
//var_dump($products);
echo '</pre>';
echo '<hr>';

//foreach ($products as $product) {
//    echo $product->get_sku();
//    echo '<br>';
//    echo $product->get_title();
//    echo '<br>';
//    echo $product->get_price();
//    echo '<hr>';
//}


exit;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();



/* генерируем лист
----------------------------------------------------------------- */
$catList = [
    ['name' => 'Tom', 'color' => 'red'],
    ['name' => 'Bars', 'color' => 'white'],
    ['name' => 'Jane', 'color' => 'Yellow'],
];
// Названия столбцов и их стили
$columns_name = ['Артикул', 'Наименование', 'Цена'];
$columns_style = [
    'font' => [
        'bold' => true,
    ],
    'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    ],
    'fill' => [
        //'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'argb' => 'c3c3c3',
        ],
    ],
];

$sheet = $spreadsheet->getActiveSheet();
//$sheet->setCellValue('A1', 'Винни Пух');
$columnPosition = 'a'; // Начальная координата x
$linePosition = 20; // Начальная координата y
// Ширина колонок
$sheet->getColumnDimension('A')->setWidth(10);
$sheet->getColumnDimension('B')->setWidth(80);
$sheet->getColumnDimension('C')->setWidth(10);

// Вставляем заголовок в "A2"
//$sheet->setCellValueByColumnAndRow($columnPosition, $startLine, 'Our cats');
$sheet->setCellValue($columnPosition.$linePosition, 'винни пух');

// Перекидываем указатель на следующую строку
$linePosition++;

$sheet->setCellValue($columnPosition.$linePosition, 'пятачок');


// Формируем шапку
$columnPosition = 'a';
$linePosition++;
foreach ($columns_name as $column) {
    // применяем стили к ячейке
    $sheet->getStyle($columnPosition.$linePosition)->applyFromArray($columns_style);
    // вставляем значение
    $sheet->setCellValue($columnPosition.$linePosition, $column);
    // Смещаемся вправо
    $columnPosition++;
}

$products = wc_get_products([
    'post_status' => 'publish',
]);
var_dump($products);

// выводим цены
//while ($products->have_posts()) : $products->the_post();
//    $columnPosition = 'a';
//    $linePosition++;
//    $post_id = get_the_ID();
//    $sheet->setCellValue($columnPosition.$linePosition, get_post_meta( $post_id, '_sku', true));
//
//    $columnPosition++;
//    $sheet->setCellValue($columnPosition.$linePosition, get_the_title());
//
//    $columnPosition++;
//    $sheet->setCellValue($columnPosition.$linePosition, get_post_meta( $post_id, '_price', true) . ' руб.');
//endwhile;






// Redirect output to a client’s web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="01simple.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

$writer = new Xlsx($spreadsheet);
//$writer->save('hello world.xlsx');
$writer->save('php://output');
