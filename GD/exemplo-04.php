<?php

header('Content-Type: image/jpeg');

$file = 'mk.jpg';

list($oldWidth, $oldHeight) = getimagesize($file);

$newWidth = $oldWidth / 8;
$newHeight = $oldHeight / 8;

$newImage = imagecreatetruecolor($newWidth, $newHeight);
$oldImage = imagecreatefromjpeg($file);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

imagejpeg($newImage);

imagedestroy($newImage);
imagedestroy($oldImage);