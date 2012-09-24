<?php
ini_set('mbstring.internal_encoding', 'UTF-8');
// POSTされたデータを調べる
if (mb_strlen($_POST['text']) > 100){
    echo 'textは 100文字以内にしてください';
}

// strlen関数だとマルチバイト文字を正しく判別できない
$str = '今日は晴れです';
echo strlen($str), PHP_EOL;
echo mb_strlen($str, 'UTF-8'), PHP_EOL; // UTF-8をmbstring.internal_encodingかmb_strlenで指定しておかないとダメ
