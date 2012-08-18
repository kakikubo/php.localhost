<?php
$float1 = 1.2;   // 実数
$float2 = 1.2e3; // 指数部を指定(1200)
echo $float1, PHP_EOL;
echo $float2, PHP_EOL;
echo floatval($float1), PHP_EOL;
echo (float)"1.2",PHP_EOL; // (float)でキャストしても良い
echo (double)"1.2",PHP_EOL;// (double)でもfloatと同じ事
