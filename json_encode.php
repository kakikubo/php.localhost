<?php
ini_set('date.timezone', 'Asia/Tokyo');
// 通常の配列
$js = array(1,2.0, 'foo' => 'bar');
echo json_encode($js), PHP_EOL;

// PHPのオブジェクトはpublicなプロパティをもつ
// JSONオブジェクトに変換されます
$js = new DateTime();
echo json_encode($js), PHP_EOL;

// privateプロパティはエンコードされません
class Priv
{
    private $hoge = 2;
    public $fuga = 4;
}

$js = new Priv();
echo json_encode($js), PHP_EOL; // fugaしかエンコードされない

// オプションを指定すると <> " などをエンコードします。
// 日本語は何も指定しなくても変換されます(UTF-8でなければなりません)
$js = array('<tag>' => '"quote"', 'jp' => '日本語');
echo json_encode($js, JSON_HEX_TAG | JSON_HEX_QUOT), PHP_EOL; 
