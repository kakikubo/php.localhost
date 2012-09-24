<?php
$index = 125;
$message = '出力を行います';
printf("[%10d] %s\n", $index, $message); 

$a = 20; 
$formatted = sprintf("%+010d", $a); 

var_dump($formatted);

