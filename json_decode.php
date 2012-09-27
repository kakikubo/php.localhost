<?php
ini_set('date.timezone', 'Asia/Tokyo');
// 通常の配列(stdClassへのデコードされる)
$js = '{"0":1,"1":2,"foo":"bar"}';
$decoded = json_decode($js);
var_dump($decoded);

// 第2引数にtrueを指定すると連想配列になります
$js = '{"0":1,"1":2,"foo":"bar"}';
$decoded = json_decode($js, true);
var_dump($decoded);

// 元のDateTimeオブジェクトには戻らない
$js = '{"date":"2012-09-27 15:21:29","timezone_type":3,"timezone":"Asia\/Tokyo"}';
$decoded = json_decode($js);
var_dump($decoded);

// こちらもただのJSONオブジェクトからのデコードです
$js = '{"fuga":4}';
$decoded = json_decode($js);
var_dump($decoded);

// 日本語や、エンコードされた記号はデコードされます
$js = '{"\u003Ctag\u003E":"\u0022quote\u0022","jp":"\u65e5\u672c\u8a9e"}';
$decoded = json_decode($js);
var_dump($decoded);
echo $decoded->jp, PHP_EOL;
