<?php
$array = array(
    1,
    2,
    'foo' => 1.5,
    'bar' => null,
    'baz' => false,
);

$serialized = serialize($array);
echo $serialized;

// 最後に、このシリアライズ済みの変数をファイルに保存しておきます。
file_put_contents('serialized.txt', $serialized);

// ファイルから読み込みます。
$contents = file_get_contents('serialized.txt');
$array = unserialize($contents);

var_dump($array);
