<?php
use Mpdf\Mpdf;

function generateProductPdf($productID)
{
    if (!is_numeric($productID)) {
        return; // не число? стоп
    }

    $filePath = price_list_path('dir'); //куда ложить наши файлы
    $fileUrl = price_list_path('url'); //путь ссылкой
    $fileName = 'fabrikanoskov_product_' . $productID;

    $mpdf = new Mpdf([
        'mode' => 'utf-8', // кодировка
        'format' => 'A4', // - формат документа
        'orientation' => 'L', // - альбомная ориентация
        'margin_top' => 0,
        'margin_left' => 0,
        'margin_right' => 0,
        'margin_bottom' => 5,
    ]);
    // генерация контента
    $mpdf->WriteHTML(\App\template('components.pdf-generate.single-product', ['productID'=>$productID]));
    // генерация файла
    $mpdf->Output($filePath . $fileName . '.pdf');
    // возвращаем ссылку на файл
    $url = $fileUrl . $fileName . '.pdf';
    $url = parse_url($url, PHP_URL_PATH);
    $response = [
        'url' => $url,
    ];
    echo wp_json_encode($response);
}

function ajaxProductPdf()
{
    if (!empty($_POST['product_id'])) {
        generateProductPdf($_POST['product_id']);
    }
    wp_die();
}
add_action('wp_ajax_nopriv_ajax_pdf_order', 'ajaxProductPdf');
add_action('wp_ajax_ajax_pdf_order', 'ajaxProductPdf');
