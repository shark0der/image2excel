<?php

$file = $argv[1];
$out  = $argv[2];

if (!is_file($file)) {
    echo 'File not found' . PHP_EOL;
    exit(1);
}

function rgb2hex($rgb) {
   $hex = '';
   $hex .= str_pad(dechex($rgb['red']), 2, '0', STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb['green']), 2, '0', STR_PAD_LEFT);
   $hex .= str_pad(dechex($rgb['blue']), 2, '0', STR_PAD_LEFT);
   return $hex;
}

$im = imagecreatefrompng($file);
$w  = imagesx($im);
$h  = imagesy($im);
$c  = fopen($out, 'w+');

for ($y = 0; $y < $h; $y++) {

    $line = [];

    for ($x = 0; $x < $w; $x++) {
        $color_idx = imagecolorat($im, $x, $y);
        $color = imagecolorsforindex($im, $color_idx);
        array_push($line, rgb2hex($color));
    }

    fputcsv($c, $line);
}

fclose($c);

