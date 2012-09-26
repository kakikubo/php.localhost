<?php
$xml_string = <<<EOI
<?xml version="1.0" encoding="UTF-8"?>
<books>
    <book code="001">
        <title>Perfect PHP</title>
        <language>PHP</language>
    </book>
    <book code="002">
        <title>Perfect C#</title>
        <language>C#</language>
    </book>
</books>
EOI;


$s = simplexml_load_string($xml_string);
// simplexml_load_fileを使うなら以下のようにする
// $xml_file = '/path/to/xmlfile.xml';
// $s = simplexml_load_file($xml_file);

echo $s->book[0]->title, PHP_EOL;

foreach ($s->book as $book){
    echo $book->title, PHP_EOL;
}


// 変更してみる
$s->book[0]->title = 'パーフェクトPHP';

// ノード追加もしてみる
$s->book[0]->addChild('price', 3000);
// 属性を追加
$s->book[0]->price->addAttribute('unit', 'yen');


echo $s->asXML();


$xml = simplexml_load_string(file_get_contents('http://d.hatena.ne.jp/sotarok/rss'));
echo $xml->channel->{'dc:creator'}; // 空になる
echo $xml->channel->children('http://purl.org/dc/elements/1.1/')->creator; //ちゃんと名前空間定義URLを用いてchildrenから呼び出す
