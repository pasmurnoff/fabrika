<?php
use Mpdf\Mpdf;

function priceListPdf()
{
    $upload_dir = (object) wp_upload_dir();
    $filePath = $upload_dir->basedir . '/price-list/'; //куда ложить наши файлы
    $fileName = 'fabrikanoskov_price_' . date('Y-m-d');

    $mpdf = new Mpdf([
        'mode' => 'utf-8', // кодировка
        'format' => 'A4', // - формат документа
        'orientation' => 'L', // - альбомная ориентация
        'margin_top' => 5,
        'margin_left' => 10,
        'margin_right' => 10,
        'margin_bottom' => 5,
    ]);

    // первый экран и стили
    $mpdf->WriteHTML(\App\template('components.pdf-generate.first'));

    /* создаем массив страниц pdf с id товаров
    ----------------------------------------------------------------- */
    $pages = array();
    $pages_item = 1; // счетчик текущей страницы
    $categories = get_terms(
        [
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
            'parent' => 0, //только родители
            'pad_counts' => true, //коллич записей себя и детей
            //'fields' => 'id=>name',
        ]
    );
    foreach ($categories as $category) {
        if (!$category->count) {
            continue; //если товаров нет, то перескакиваем
        }
        $products = wc_get_products([
            'post_status' => 'publish',
            'posts_per_page' => -1, // количество товаров для отображения
            'product_cat' => $category->slug,
        ]);
        $i = 0;
        foreach ($products as $product) {
            if (empty($i)) { // если нужно вывести заголовок
                $pages_item++;
                $pages[$pages_item][] = $category->name;
                $i = 2;
            }
            $pages[$pages_item][] = $product->get_id();
            $i++;
            // на странице должно быть не больше 4 элементов
            if ($i > 4) {
                $i = 1;
                $pages_item++;
            }
        }
    }

    /* генерируем страницы
    ----------------------------------------------------------------- */
    foreach ($pages as $page) {
        $mpdf->AddPage();
        $mpdf->WriteHTML(\App\template('components.pdf-generate.wrap', ['page' => $page]));
    }

    /* сохраняем файл
    ----------------------------------------------------------------- */
    if (!file_exists($filePath)) {
        mkdir($filePath, 0777, true);
    }
    $mpdf->Output($filePath . $fileName . '.pdf', 'F');
}
