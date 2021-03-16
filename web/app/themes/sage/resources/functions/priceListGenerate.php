<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function generatePriceList()
{
    $spreadsheet = new Spreadsheet();

    $filePath = './app/uploads/price-list/'; //куда ложить наши файлы
    $fileName = date('Y-m-d') . '_fabrikanoskov_price';
    $fileName = date('H-i-s');
    $columnPositionStart = 'B'; //Начальная координата x

    $about_company = [
        'phones' => "Горячая линия: 8 (800) 444-11-56 \nТелефон с мессенджерами: +7 (927) 451-90-36",
        'url' => $_SERVER['HTTP_HOST'],
        'date' => 'Цены указаны на ' . date('d-m-Y'),
    ];

    $columns_table = [
        //width число или auto
        [
            'name' => 'Артикул',
            'width' => 10
        ],
        [
            'name' => 'Наименование',
            'width' => 70
        ],
        [
            'name' => 'Цена',
            'width' => 10
        ],
        [
            'name' => 'Размеры',
            'width' => 20
        ],
        [
            'name' => 'Описание',
            'width' => 45
        ],
    ];

// СТИЛИ:
    $style_global = [
        'alignment' => [
            'wrapText' => true,//включает переносы строк и авто высоту
            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,//выравнивание по вертикали
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
    $style_link = [
        'font' => array(
            'color' => array(
                'rgb' => '0000FF'
            ),
            'underline' => 'single'
        )
    ];

    $sheet = $spreadsheet->getActiveSheet();//наш лист
    $sheet->setTitle('Прайс-лист');//название листа
    $spreadsheet->getDefaultStyle()->applyFromArray($style_global);//стили ко всем ячейкам

    /* формируем инфу над таблицей
    ----------------------------------------------------------------- */
    // название
    $sheet->getCell('C3')->setValue('Прайс-лист');
    $sheet->getStyle('C3')->applyFromArray($style_document_name);
    // контакты
    $sheet->getCell('C5')->setValue($about_company['phones']);
    // ссылка
    $sheet->setCellValue('C7', $about_company['url']);
    $sheet->getCell('C7')->getHyperlink()->setUrl('https://' . $about_company['url']);
    $sheet->getStyle('C7')->applyFromArray($style_link);
    // дата
    $sheet->setCellValue('C9', $about_company['date']);

    /* ставим лого
    ----------------------------------------------------------------- */
    $logoPath = './app/themes/sage/resources/assets/images/logo-for-price-list.png';
    if (file_exists($logoPath)) {
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setPath($logoPath);
        $drawing->setCoordinates('C2');
        $drawing->setWorksheet($sheet);
    }
    $sheet->getRowDimension("2")->setRowHeight(50);

    /* формируем шапку таблицы цен
    ----------------------------------------------------------------- */
    $columnPosition = $columnPositionStart; // Начальная координата x
    $linePosition = 12; // Начальная координата y
    $columnMerge = '';
    foreach ($columns_table as $column) {
        // ширина колонок
        if (isset($column['width'])) {
            if (is_int($column['width'])) {
                $sheet->getColumnDimension($columnPosition)->setWidth($column['width']);
            } elseif ($column['width'] == 'auto') {
                $sheet->getColumnDimension($columnPosition)->setAutoSize(true);
            }
        }
        // ячейки
        $sheet->setCellValue($columnPosition . $linePosition, $column['name']);
        $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_columns);
        //для объединения ячеек в дальнейшем определяем последний столбец
        if (!next($columns_table)) {
            $columnMerge = $columnPosition;
        }
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
        $columnPosition = $columnPositionStart;
        $linePosition++;
        $sheet->mergeCells($columnPosition . $linePosition . ':' . $columnMerge . $linePosition);//объединяем
        $sheet->setCellValue($columnPosition . $linePosition, $category->name);
        $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_category_title);
        $sheet->getRowDimension($linePosition)->setRowHeight(30);

        $products = wc_get_products([
            'post_status' => 'publish',
            'posts_per_page' => -1, // количество товаров для отображения
            'product_cat' => 'zhenskoe',
        ]);

        foreach ($products as $product) {
            $linePosition++;
            //артикул
            $columnPosition = $columnPositionStart;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_sku());
            //название
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_title());
            $sheet->getCell($columnPosition . $linePosition)->getHyperlink()->setUrl(get_permalink($product->get_id()));
            $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_link);
            //цена
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_price() . ' руб.');
            //размеры
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $product->get_attribute('razmer-noskov'));
            //состав
            $columnPosition++;
            $desc = $product->get_description();
            $desc = strip_tags($desc);
            //$desc = trim($desc);
            $sheet->setCellValue($columnPosition . $linePosition, $desc);
        }
    }

    /* Сохраняем файл
    ----------------------------------------------------------------- */
    $writer = new Xlsx($spreadsheet);
    $writer->save($filePath . $fileName . '.xlsx');
    //error_log(print_r($writer));
    //$writer->save('php://output');
    $zip = new ZipArchive();
    $zip->open($filePath . $fileName . '.zip', ZIPARCHIVE::CREATE);
    $zip->addFile($filePath . $fileName . '.xlsx', $fileName . '.xlsx');
    $zip->close();
}
