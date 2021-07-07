<?php

header('Content-Type: image/jpg');

$image = imagecreatefromjpeg('certificado.jpg');
$fontPath1 = 'fonts' . DIRECTORY_SEPARATOR . 'Bevan' . DIRECTORY_SEPARATOR . 'Bevan-Regular.ttf';
$fontPath2 = 'fonts' . DIRECTORY_SEPARATOR . 'Playball' . DIRECTORY_SEPARATOR . 'Playball-Regular.ttf';

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 300, 150, $titleColor, $fontPath1, 'CERTIFICADO');
imagettftext($image, 32, 0, 400, 350, $titleColor, $fontPath2, 'Jean Carlos');
imagettftext($image, 14, 0, 365, 400, $titleColor, $fontPath1, 'Concluído em '. date('d/m/Y'));

$filename = 'certificado-' . date('Y-m-d') . '.jpg';

imagejpeg($image, $filename); // Passando o nome do arquivo, em vez de exibir na tela, será salvo no diretório.
imagedestroy($image);