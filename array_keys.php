<?php
$array = array(
    1, 2,
    'foo' => 'baz',
    'bar' => 'baz',
    'hoge' => 'fuga',
    "teruo" => "1",
);

// 配列のすべてのキーを取り出す
$keys = array_keys($array);
var_dump($keys);

// 値にbazをもつ要素のキーのみを取り出す
echo "厳密な型チェックをしない", PHP_EOL;
$keys_search = array_keys($array, 'baz'); 
var_dump($keys_search);

// 第３引数をtrueにすると、厳密な型チェック(===)を行う
echo "厳密な型チェックをする", PHP_EOL;
$keys_search = array_keys($array, "1", true);
var_dump($keys_search);
