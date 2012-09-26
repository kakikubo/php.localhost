<?php
$dt1 = new DateTime('2010-05-22 02:12:00');
echo $dt1->add(DateInterval::createFromDateString('1year 2month 3day 4hour 5min 6sec'))->format('Y-m-d H:i:s'), PHP_EOL;
// 2011-07-25 06:17:06

// agoをつけると減算になる
$dt1 = new DateTime('2010-05-22 02:12:00'); // $dt1 はaddメソッドで破壊されているので、再度生成
echo $dt1->add(DateInterval::createFromDateString('1year 2month 3day 4hour 5min 6sec ago'))->format('Y-m-d H:i:s'), PHP_EOL;
// 2009-03-18 22:06:54
$dt1 = new DateTime('2010-05-22 02:12:00');


// subメソッドでも減算する
$dt1 = new DateTime('2010-05-22 02:12:00'); // $dt1 はaddメソッドで破壊されているので、再度生成
echo $dt1->sub(DateInterval::createFromDateString('1year 2month 3day 4hour 5min 6sec'))->format('Y-m-d H:i:s'), PHP_EOL;
