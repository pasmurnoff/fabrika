<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function generatePriceList()
{
    $spreadsheet = new Spreadsheet();

    /* генерируем лист
    ----------------------------------------------------------------- */
    $about_company = [
        'title' => 'ООО «Фабрика Носков»',//вывести через wp
        'phones' => "Горячая линия: 8 (800) 444-11-56 \nТелефон с мессенджерами: +7 (927) 451-90-36",
        'url' => 'www.fabrikanoskov.ru',
        'date' => 'Цены указаны на ' . date('d-m-Y'),
    ];

// СТИЛИ:
    $style_global = [
        'alignment' => [
            'wrapText' => true,//включает переносы строк и авто высоту
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,//выравнивание по вертикали
        ],
    ];

    $style_company_name = [
        'font' => [
            'bold' => true,
            'size' => 22,
        ],
    ];
    $style_document_name = [
        'font' => [
            'bold' => true,
            'size' => 26,
        ],
    ];
// заголовки столбцов
    $style_columns = [
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
                'argb' => 'b4b4b4',
            ],
        ],
    ];
// заголовок категории
    $style_category_title = [
        'font' => [
            'bold' => true,
            'size' => 18,
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
//цена в заголовке
    $style_price_title = [
        'fill' => [
            //'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => [
                'argb' => 'bdd7ee',
            ],
        ],
    ];
//цена в строке
    $style_price = [
        'alignment' => [
            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
        ],
        'fill' => [
            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
            'startColor' => [
                'argb' => 'bdd7ee',
            ],
        ],
    ];


    $sheet = $spreadsheet->getActiveSheet();//наш лист
    $sheet->setTitle('Прайс-лист');//название листа
    $spreadsheet->getDefaultStyle()->applyFromArray($style_global);//стили ко всем ячейкам
    //$sheet->getRowDimension("1")->setRowHeight(50);
    //$sheet->getDefaultStyle()->getFont()->setSize(18);

// Ширина колонок
    $sheet->getColumnDimension('A')->setWidth(2);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    //$sheet->getColumnDimension('C')->setWidth(10);
    //$sheet->getColumnDimension('D')->setWidth(80);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setWidth(10);
    $sheet->getColumnDimension('F')->setWidth(20);
    $sheet->getColumnDimension('G')->setWidth(100);

    /* формируем инфу над таблицей
    ----------------------------------------------------------------- */
//название
    $sheet->getCell('C2')->setValue('Прайс-лист');
    $sheet->getStyle('C2')->applyFromArray($style_document_name);
//компания
    $sheet->getCell('C3')->setValue($about_company['title']);
    $sheet->getStyle('C3')->applyFromArray($style_company_name);
//контакты
    $sheet->getCell('C5')->setValue($about_company['phones']);
//ссылка
    $sheet->setCellValue('C7', $about_company['url']);
    $sheet->getCell('C7')->getHyperlink()->setUrl('https://' . $about_company['url']);
// ставим дату
    $sheet->setCellValue('C9', $about_company['date']);



    $sheet->setCellValue('E2', date('i:s'));
    $sheet->getStyle('E2')->applyFromArray($style_document_name);

    $thumbnail = get_the_post_thumbnail_url(25471, 'thumbnail');
    $thumbnail = parse_url($thumbnail, PHP_URL_PATH);
    $sheet->setCellValue('C10', $thumbnail);

    $thumbnail = get_the_post_thumbnail_url(23557, 'thumbnail');
    $thumbnail = parse_url($thumbnail, PHP_URL_PATH);
    $sheet->setCellValue('F10', $thumbnail);


    //$drawing->setPath(__DIR__ . '/app/uploads/2020/07/img_6810-150x150.jpg');



//    $drawing->setName('Paid');
//    $drawing->setDescription('Paid');
//    $drawing->setPath('http://fabrika.test/app/uploads/2020/07/img_6810-150x150.jpg');
//    $drawing->setCoordinates('C11');
    //$drawing->setOffsetX(110);
    //$drawing->setRotation(25);
//    $drawing->getShadow()->setVisible(true);
//    $drawing->getShadow()->setDirection(45);

//    $objDrawing->setResizeProportional(false);
//    $objDrawing->setName('Название картинки');
//    $objDrawing->setDescription('Описание картинки');
//    $objDrawing->setPath(__DIR__ . '/logo.png');
//    $objDrawing->setCoordinates('C11');
//    $objDrawing->setOffsetX(10);
//    $objDrawing->setOffsetY(10);
//    $objDrawing->setWidth(163);
//    $objDrawing->setHeight(50);
//    $objDrawing->setWorksheet($sheet);

    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    //$drawing->setName('Винни Пух');
    //$drawing->setDescription('Пятачок');
    try {
        $drawing->setPath('./app/uploads/2020/07/img_6810-150x150123.jpg');
    } catch (\PhpOffice\PhpSpreadsheet\Exception $e) {
        $drawing->setPath('./app/themes/sage/resources/assets/images/no-picture.png');
    }
    $drawing->setCoordinates('C11');
    $drawing->setHeight(50);
    $drawing->setWorksheet($sheet);

    /* формируем шапку таблицы цен
    ----------------------------------------------------------------- */
    $columnPosition = 'B'; // Начальная координата x
    $linePosition = 12; // Начальная координата y
// Названия столбцов и их стили
    $columns_name = ['Изображение', 'Артикул', 'Наименование', 'Цена', 'Размеры', 'Описание'];
    $columns_name_count = count($columns_name);
    foreach ($columns_name as $column) {
        // применяем стили к ячейке
        $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_columns);
        if ($column == 'Цена') {
            $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_price_title);
        }
        // вставляем значение
        $sheet->setCellValue($columnPosition . $linePosition, $column);
        // Смещаемся вправо
        $columnPosition++;
    }

    /* генерируем строки таблицы цен
    ----------------------------------------------------------------- */
    $categories = get_terms(
        [
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
            'parent' => 0, //только родители
            'pad_counts' => true, //коллич записей себя и детей
        ]
    );
    foreach ($categories as $category) {
        if (!$category->count) {
            continue; //если товаров нет, то перескакиваем
        }
        $columnPosition = 'B';
        $linePosition++;
        $columnMerge = 'C'; //объединяем ячейки
        $sheet->mergeCells($columnPosition . $linePosition . ':' . $columnMerge . $linePosition);
        $sheet->setCellValue($columnPosition . $linePosition, $category->name);
        $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_category_title);
        // далее для красоты заполняем строку стилями
        for ($i = 2; $i <= $columns_name_count; $i++) {
            $columnPosition++;
            if ($i == 3) { // если это столбец цены, то задаем ячейке фон
                $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_price);
            } else {
                $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_category_title);
            }
        }

        $products = wc_get_products([
            'post_status' => 'publish',
            'posts_per_page' => -1, // количество товаров для отображения
            'product_cat' => 'zhenskoe',
        ]);

        foreach ($products as $product) {
            $linePosition++;
            //изображение
            $columnPosition = 'B';

            $thumbnail = get_the_post_thumbnail_url(25471, 'thumbnail');
            $thumbnail = parse_url($thumbnail, PHP_URL_PATH);
            $sheet->setCellValue($columnPosition . $linePosition, $thumbnail);

            $sheet->getStyle('B14')->getAlignment()->setIndent(1);





            //артикул
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_sku());
            //название
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_title());
            //цена
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_price() . ' руб.');
            $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_price);
            //размеры
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_attribute('razmer-noskov'));
            //состав
            $columnPosition++;
            $desc = $product->get_description();
            $desc = strip_tags($desc);
            //$desc = trim($desc);
            $sheet->setCellValue($columnPosition . $linePosition, $desc);

            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, '123');
        }
    }

    /* Сохраняем файл
    ----------------------------------------------------------------- */
// Redirect output to a client’s web browser (Xlsx)
//    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//    header('Content-Disposition: attachment;filename="01simple.xlsx"');
//    header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
//    header('Cache-Control: max-age=1');

    $writer = new Xlsx($spreadsheet);
    $writer->save('hello.xlsx');
    //error_log(print_r($writer));
    //$writer->save('php://output');
}

function generateByButton()
{
    if (isset($_POST['XLSGenerate'])) {
        generatePriceList();
    }
}
add_action('generateXLS', 'generateByButton');
