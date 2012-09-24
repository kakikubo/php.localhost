<?php
// UTF-8でファイルを作成します。

// 検証に利用する文字列
$string = '7文字の文字列';

// 内部エンコーディングをUTF-8に設定します
ini_set('mbstring.internal_encoding', 'UTF-8');

// 正しく７文字と出力されます
echo "「{$string}」は", mb_strlen($string), "文字です。", PHP_EOL; 

// 内部文字エンコーディングをEUC-JPに設定します。
ini_set('mbstring.internal_encoding', 'EUC-JP');

// 内部文字エンコーディングの設定が変わってしまい
// ファイルを記述しているエンコーディングと異なる為、
// 正しく文字数をカウントできません。
echo "「{$string}」は", mb_strlen($string), "文字です。", PHP_EOL; 
