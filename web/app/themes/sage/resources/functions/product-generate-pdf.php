<?php
use Mpdf\Mpdf;

function generateProductPdf($productID)
{
    if (!is_numeric($productID)) {
        return; // не число? стоп
    }

    $upload_dir = (object) wp_upload_dir();
    $filePath = $upload_dir->basedir . '/price-list/'; //куда ложить наши файлы
    $fileUrl = $upload_dir->baseurl . '/price-list/'; //путь ссылкой
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
    echo $fileUrl . $fileName . '.pdf';
}

function generateByButton()
{
    if (isset($_POST['productPDF'])) {
        $productID = get_the_ID();
        //var_dump($productID);
        $productID = 24423;
        generateProductPdf($productID);
    }
}
add_action('generateXLS', 'generateByButton');

/* ajax
----------------------------------------------------------------- */
function ajaxProductPdf()
{
    if (!empty($_POST['product_id'])) {
        generateProductPdf($_POST['product_id']);
    }

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo date('i-s') . '<br>';
}

add_action('wp_ajax_nopriv_ajax_pdf_order', 'ajaxProductPdf');
add_action('wp_ajax_ajax_pdf_order', 'ajaxProductPdf');
