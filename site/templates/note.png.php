<?php
// Define canvas size
$canvas = imagecreatetruecolor(1200, 628);

// Define colors
$brandColor      = imagecolorallocate($canvas, 206, 93, 151);
$backgroundColor = imagecolorallocate($canvas, 16, 15, 15);
$textColor       = imagecolorallocate($canvas, 206, 205, 195);
$secondTextColor = imagecolorallocate($canvas, 87, 86, 83);

// Set background
imagefill($canvas, 0, 0, $backgroundColor);

// Path to .ttf font file
$fontFile = './assets/fonts/HubotSans-Light.ttf';

// Write page title to canvas
$title  = $page->title()->toString();
$title  = wordwrap($title, 30);
//$link   = $page->url();
$link   = "https://djdn.de";
$link   = wordwrap($link, 30);
imagefttext($canvas, 60, 0, 80, 175, $textColor, $fontFile, $title);
imagefttext($canvas, 25, 0, 80, 540, $secondTextColor, $fontFile, $link);

// Place logo in the corner
$logoFile = './assets/img/logo.png';
$logo     = imagecreatefrompng($logoFile);

imagecopyresampled($canvas, $logo, 960, 425, 0, 0, imagesx($logo), imagesy($logo), imagesx($logo), imagesy($logo));

// Output image to the browser
imagepng($canvas);
imagedestroy($canvas);
