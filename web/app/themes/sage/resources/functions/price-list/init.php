<?php
require_once __DIR__  . '/xlsx.php';
require_once __DIR__  . '/pdf.php';

function generatePriceLists()
{
    $filePath = price_list_path('dir');

    generatePriceListXlsx($filePath);
    generatePriceListPdf($filePath);
    deletePriceLists($filePath);
}

/* путь до нашей папки
----------------------------------------------------------------- */
function price_list_path($type): string
{
    $path = '';
    $folder = '/price-list/';
    $upload_dir = (object) wp_upload_dir();
    if ($type === 'url') {
        $path = $upload_dir->baseurl . $folder;
    } elseif ($type === 'dir') {
        $path = $upload_dir->basedir . $folder;
        if (!file_exists($path)) {// если нет папки, то создаем
            mkdir($path, 0777, true);
        }
    }
    return $path;
}

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
function priceListLinks($files, $li_class = '', $link_class = '')
{
    if (!is_array($files)) {
        return;
    }
    $liClass = empty($li_class) ? '' : ' class="' . $li_class . '"';
    $linkClass = empty($link_class) ? '' : ' class="' . $link_class . '"';
    $fileFolderDir = price_list_path('dir');
    $fileFolderUrl = price_list_path('url');
    $fileNameToday = 'fabrikanoskov_price_' . date('Y-m-d');
    $fileNameYesterday = 'fabrikanoskov_price_' . date('Y-m-d', time()-60*60*24);

    foreach ($files as $extension => $titleLink) {
        $item = '';
        $today = $fileNameToday . '.' . $extension;
        $yesterday = $fileNameYesterday . '.' . $extension;

        if (is_file($fileFolderDir . $today)) { //сегодняшний файл
            $fileSize = number_format(filesize($fileFolderDir . $today) / 1048576, 2);
            $item .= '<li' . $liClass . '>';
            $item .= '<a href="' . $fileFolderUrl . $today .'"'. $linkClass .' download>'. $titleLink .' (' . $fileSize . ' Мб)</a>';
            $item .= '</li>';
        } elseif (is_file($fileFolderDir . $yesterday)) { // вчерашний файл
            $fileSize = number_format(filesize($fileFolderDir . $yesterday) / 1048576, 2);
            $item .= '<li' . $liClass . '>';
            $item .= '<a href="' . $fileFolderUrl . $yesterday .'"'. $linkClass .' download>'. $titleLink .' (' . $fileSize . ' Мб)</a>';
            $item .= '</li>';
        }
        echo $item;
    }
}
