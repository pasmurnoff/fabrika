<?php
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
