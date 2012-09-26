<?php
// データベースから取得するなど、何かしらの処理を行い、$date変数に代入する
$date = '2010-05-22 02:12:00';
$dt = new DateTime($date, new DateTimeZone('Asia/Tokyo'));
$dt->setTimeZone(new DateTimeZone('America/New_York'));
echo $dt->format(DateTime::W3C), PHP_EOL;

// メソッドチェインを使うと以下のようになる(PHP5.3より)
echo $dt->setTimeZone(new DateTimeZone('America/New_York'))->format(DateTime::W3C), PHP_EOL;

