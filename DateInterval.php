<?php

$di1 = new DateInterval('P2Y3M4DT5H6M30S');
echo $di1->format('%Y-%M-%D %H:%I:%S'), PHP_EOL; // 02-03-04 05:06:30

// createFromDateString()メソッドで生成
// また、出力には比較のため先頭にゼロが付かない指定子を使う
$di2 = DateInterval::createFromDateString('2 years 3 months 4days 5hours 6minitus 30 seconds');
echo $di2->format('%Y-%M-%D %H:%I:%S'), PHP_EOL; // 02-03-04 05:06:30
