<?php
$dt1 = new DateTime('2010-05-22');
$dt2 = new DateTime('13 July 2004');
$diff = $dt1->diff($dt2);
echo 'PHP 5.0.0. がリリースされてから', $diff->format('%y年%mヶ月%d日'), PHP_EOL;
echo '総日数： ', $diff->format('%a 日'), PHP_EOL;

// 自分の誕生日もついでに求めてみる
$birth = new DateTime('1977-03-13');
$today = new Datetime();
$age = $birth->diff($today);
echo 'うまれてから', $age->format('%y年%mヶ月%d日たちました。'), PHP_EOL;

// 時刻の差を求める事だって出来る
$dt1 = new DateTime('2010-05-21 23:55'); // 寝た時間
$dt2 = new DateTime('2010-05-22 06:13'); // 起きた時間

$diff = $dt1->diff($dt2);
echo $diff->format('%h時間%i分寝ました'), PHP_EOL;


