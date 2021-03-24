<?php
require_once __DIR__  . '/xlsx.php';
require_once __DIR__  . '/pdf.php';

function generatePriceLists()
{
    $upload_dir = (object) wp_upload_dir();
    $filePath = $upload_dir->basedir . '/price-list/';
    if (!file_exists($filePath)) {
        // если нет папки, то создаем
        mkdir($filePath, 0777, true);
    }

    generatePriceListXlsx($filePath);
    generatePriceListPdf($filePath);
    deletePriceLists($filePath);
}

/* СДЕЛАТЬ:
Лого можно вызвать так @asset('images/logo-for-price-list.png')
Можно убрать проверку на пустую категорию, изменив свойство 'hide_empty' => true
+ Заменить все array() на []
Здесь необходимо проверять на существование данные значения, если их нет, тогда ничего не пишем
'images_ids' => $product->get_gallery_image_ids(),Если нет галереи выводим просто thumbnail
Если вдруг нет ни вчерашнего, ни сегодняшнего, тогда тоже ничего не выыводим в футере
Используем asset_path('images/........')
+ Если нет одно цены или размеров, то пишем По запросу
+ сделать функцию обертку, а удаление вынести в отдельную
----------------------------------------------------------------- */

/* удаляем все старые файлы
----------------------------------------------------------------- */
function deletePriceLists($filePath)
{
    $fileDeletionTime = 60 * 60 * 24 * 3; //старше этого периода файлы удаляются

    $filesInFolder = scandir($filePath);
    $nowTime   = time();
    foreach ($filesInFolder as $file) {
        $file = $filePath . $file;
        if (!is_file($file)) {
            continue;
        }
        if ($nowTime - filemtime($file) >= $fileDeletionTime) {
            unlink($file);
        }
    }
}

/* генерируем ссылки в подвале сайта
----------------------------------------------------------------- */
function priceListLink($fileType, $titleLink = '', $class = '')
{
    $upload_dir = (object) wp_upload_dir();
    $fileFolderUrl = $upload_dir->baseurl . '/price-list/';
    $filePath = $upload_dir->basedir . '/price-list/';
    $fileNameToday = 'fabrikanoskov_price_' . date('Y-m-d') . '.' . $fileType;
    $fileNameYesterday = 'fabrikanoskov_price_' . date('Y-m-d', time()-60*60*24) . '.' . $fileType;

    $classLink = empty($class) ? '' : ' class="' . $class . '"';
    //$titleLink = $fileType == 'xlsx' ? 'Microsoft Excel' : 'Zip-архив';

    $link = '';
    if (is_file($filePath . $fileNameToday)) { //сегодняшний файл
        $fileSize = number_format(filesize($filePath . $fileNameToday) / 1048576, 2);
        $link = '<a href="' . $fileFolderUrl . $fileNameToday .'" '. $classLink .' download>'. $titleLink .' (' . $fileSize . ' Мб)</a>';
    } elseif (is_file($filePath . $fileNameYesterday)) { //вчерашний файл
        $fileSize = number_format(filesize($filePath . $fileNameYesterday) / 1048576, 2);
        $link = '<a href="' . $fileFolderUrl . $fileNameYesterday .'" '. $classLink .' download>'. $titleLink .' (' . $fileSize . ' Мб)</a>';
    }
    echo $link;
}
