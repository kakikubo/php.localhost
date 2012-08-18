<?php
$int1 = 1;
$int2 = -1;
$int3 = 011; // 8進数。10進の9
$int4 = 0xff; // 16進数。10進の255
$int5 = PHP_INT_MAX;
$int6 = PHP_INT_MAX + 1;
echo $int1,PHP_EOL;
echo $int2,PHP_EOL;
echo $int3,PHP_EOL;
echo $int4,PHP_EOL;
echo $int5,PHP_EOL;
echo $int6,PHP_EOL;

echo (int)3.0,PHP_EOL; // キャストしてみる
echo (integer)5.0,PHP_EOL; // キャストしてみる
echo intval("5.0"),PHP_EOL; // キャストしてみる
