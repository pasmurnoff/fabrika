<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);
require('vendor/autoload.php');
require('../../../../../wp/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// getting manager



	if (empty($_POST['manager']) || empty($_POST['fabrics'] )) {
		echo 'Выберите фабрику или менеджера';
		exit;
	}

	$manager = $wpdb->get_row("SELECT * FROM fv_contacts WHERE id = {$_POST['manager']}");



	$fabrics = $wpdb->get_results("SELECT * FROM fv_vendors WHERE id IN(" .implode(",",$_POST['fabrics']). ") ");

	if (!empty($_POST['data'])) {


		foreach($_POST['data'] as $key => &$item) {


			$pictures = normalizeFiles($_FILES['photos_' . $key]);



			// checking pictures
			if (!empty($pictures)) {


					foreach($pictures as $key=> $picture) {
						if ($picture['size'] > 0) {

							if (move_uploaded_file($picture['tmp_name'], './tmp/' .$picture['name'] )) {

								$item['images'][] = [
									'src' => './tmp/' .$picture['name'],
									'name' => $picture['name'],
								];
								//$mail->addStringAttachment(file_get_contents('./tmp/' .$picture['name']), $picture['name']);
							}
						}
					}
			}
			$items[] = $item;
		}
		$order_number = @file_get_contents('number.txt') | 0;
		file_put_contents('number.txt',++$order_number);
		foreach($fabrics as $fabric) {

			$mail = new PHPMailer\PHPMailer\PHPMailer();
			//$mail->isSendmail();
			$mail->CharSet = 'UTF-8';
			$mail->isHTML(true);
			$mail->setFrom($manager->email, 'Фабрика Носков');




			$mail->Subject  = "Расчет стоимости по заявке № $order_number";
			foreach($items as $key => $item) {
				$pdf_name = $key+1;
				$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
				$fontDirs = $defaultConfig['fontDir'];

				$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
				$fontData = $defaultFontConfig['fontdata'];

				$mpdf = new \Mpdf\Mpdf([
					'format' => 'A4',
					'margin_left' => 10,
					'margin_right' => 10,
					'margin_top' => 30,
					'margin_bottom' => 10,
					'margin_header' => -10,
					'margin_footer' => 5,
					'fontDir' => array_merge($fontDirs, [
						__DIR__ . '/fonts/',
					]),
					'fontdata' => $fontData + [
							'calibri' => [
								'R' => 'CALIBRI.TTF',
								'B' => 'CALIBRIB.TTF',
							]
						],
					'default_font' => 'calibri'
				]);
				if (!empty($item['images'])) {

						foreach($item['images'] as $image) {
							$mail->addStringAttachment(file_get_contents($image['src']), $image['name']);
						}
				}
				$mail->Body = "



	<p>Уважаемые сотрудники " . stripslashes($fabric->name). ", высылаем вам на просчет заявку на изготовление чулочно-носочной продукции. Просим дать ответ в кратчайшие возможные сроки.</p>

	<p>Файл заявки прикреплен к данному письму.</p>

	<p>Спасибо!</p>";
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				ob_start();
				include('./template.php');
				$content = ob_get_contents();
				ob_end_clean();
				$mpdf->WriteHTML($content);
				ob_start();
				$mpdf->Output();
				$pdf = ob_get_contents();
				ob_end_clean();
				$mail->addStringAttachment($pdf, $pdf_name  .'.pdf');
				$mail->addAddress(trim($fabric->email));


			}
			if ($mail->send()) {
				echo "Письмо отправлено {$fabric->email}<br/>";
			} else {
				echo 'Mailer error: ' . $mail->ErrorInfo;

			}



		}








	}


}

function normalizeFiles( &$files )
{
    $_files       = [ ];
    $_files_count = count( $files[ 'name' ] );
    $_files_keys  = array_keys( $files );

    for ( $i = 0; $i < $_files_count; $i++ )
        foreach ( $_files_keys as $key )
            $_files[ $i ][ $key ] = $files[ $key ][ $i ];

    return $_files;
}

/*
 * End of script
 */
