<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function generatePriceListXlsx($filePath)
{
    $fileName = 'fabrikanoskov_price_' . date('Y-m-d');
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
            'width' => 15
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

    /* СТИЛИ
    ----------------------------------------------------------------- */
    $style_global = [
        'alignment' => [
            'wrapText' => true,//включает переносы строк и авто высоту
            'vertical' => Alignment::VERTICAL_CENTER,//выравнивание по вертикали
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
            'horizontal' => Alignment::HORIZONTAL_CENTER,
        ],
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'startColor' => [
                'argb' => 'c3c3c3',
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
            'horizontal' => Alignment::HORIZONTAL_CENTER,
        ],
        'fill' => [
            'fillType' => Fill::FILL_SOLID,
            'startColor' => [
                'argb' => 'dddddd',
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

    $spreadsheet = new Spreadsheet();
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
    $logoPath = get_template_directory() . '/assets/images/logo-for-price-list.png';
    if (file_exists($logoPath)) {
        $drawing = new Drawing();
        $drawing->setPath($logoPath);
        $drawing->setCoordinates('C2');
        $drawing->setWorksheet($sheet);
    }
    $sheet->getRowDimension('2')->setRowHeight(50);

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
            'hide_empty' => true,//только с товарами
            'parent' => 0, //только родители
            'pad_counts' => true, //коллич записей себя и детей
        ]
    );
    foreach ($categories as $category) {
        $columnPosition = $columnPositionStart;
        $linePosition++;
        $sheet->mergeCells($columnPosition . $linePosition . ':' . $columnMerge . $linePosition);//объединяем
        $sheet->setCellValue($columnPosition . $linePosition, $category->name);
        $sheet->getStyle($columnPosition . $linePosition)->applyFromArray($style_category_title);
        $sheet->getRowDimension($linePosition)->setRowHeight(30);

        $products = wc_get_products([
            'post_status' => 'publish',
            'posts_per_page' => -1, // количество товаров для отображения
            'product_cat' => $category->slug,
        ]);

        foreach ($products as $product) {
            $linePosition++;
            $price = (empty($product->get_price())) ? 'По запросу' : $product->get_price() . ' руб.';
            //определяем тип размера и достаем его
            $size_type = 'pa_razmer-noskov';
            foreach ($product->get_attributes() as $key => $value) {
                if (strpos($key, 'pa_razmer') !== false) {
                    $size_type = $key;
                    break;
                }
            }
            $sizes = (empty($product->get_attribute($size_type))) ? 'По запросу' : $product->get_attribute($size_type);
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
            $sheet->setCellValue($columnPosition . $linePosition, $price);
            //размеры
            $columnPosition++;
            $sheet->setCellValue($columnPosition . $linePosition, $sizes);
            //состав
            $columnPosition++;
            $desc = $product->get_description();
            $desc = strip_tags($desc);
            //$desc = trim($desc);
            $sheet->setCellValue($columnPosition . $linePosition, $desc);
        }
    }

    /* сохраняем файлы
    ----------------------------------------------------------------- */
    $writer = new Xlsx($spreadsheet);
    $writer->save($filePath . $fileName . '.xlsx');

    $zip = new ZipArchive();
    $zip->open($filePath . $fileName . '.zip', ZIPARCHIVE::CREATE);
    $zip->addFile($filePath . $fileName . '.xlsx', $fileName . '.xlsx');
    $zip->close();
}
