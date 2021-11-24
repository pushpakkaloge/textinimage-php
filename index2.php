<?php
$getImage =  $_GET["postImage"];
$getText =  $_GET["text"];


$img = imagecreatefromjpeg("uploads/".$getImage);

$txt = $getText;
$fontFile = "C:\Windows\Fonts\arial.ttf"; // CHANGE TO YOUR OWN!
$fontSize = 200;
$fontColor = imagecolorallocate($img, 255, 0,0);
$posX = 1500;
$posY = 1000;
$angle = 0;
imagettftext($img, $fontSize, $angle, $posX, $posY, $fontColor, $fontFile, $txt);

// output
header("Content-type: image/jpeg");
imagejpeg($img);
imagedestroy($img);

// Download
$quality = 100; // 0 to 100
imagejpeg($img, "download.jpg", $quality);

?>

