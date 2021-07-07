<?php

header('Content-Type: image/jpg');

$image = imagecreatefromjpeg('mk.jpg');

$titleColor = imagecolorallocate($image, 255, 255, 255);

imagestring($image, 5, 1230, 1100, 'Mortal Kombat', $titleColor);

imagejpeg($image);
imagedestroy($image);