{{--
  Template Name: Генерация прайс листа
--}}
<?php
use Mpdf\Mpdf;

//$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8', // кодировка (по умолчанию UTF-8)
    'format' => 'A4', // - формат документа
    'orientation' => 'L', // - альбомная ориентация
    //'tempDir' => './'
]);

// подключаем файл стилей
$stylesheet = file_get_contents('style.css');
$mpdf->WriteHTML('<style>' . $stylesheet . '</style>');

//первая страница
$html = '<div class="vinni">Винни пух</div>';
$mpdf->WriteHTML($html);

//вторая страница
$mpdf->AddPage();
$mpdf->WriteHTML('<div class="puh">хочет меда</div>');

//$mpdf->Output();
$mpdf->Output('vinni.pdf', 'F');
