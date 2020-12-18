<?php

$img = 'file.txt';
if(file_exists($img)) $num = file_get_contents($img);
isset($num) ? $num++ : $num = 0;
echo "Вы посмотрили картинку ".$num." раз(а).";
file_put_contents($img, $num);


$images = 'image.jpg';
echo "<img src='$images' >";
