<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
if (isset($_GET['file']) === true && $_GET['file'] !== ''){
    // GET変数で指定されたファイルが /var/www に存在すれば内容を出力
    $file = '/var/www/' . $_GET['file'];
    if (file_exists($file) === true){
        readfile($file);
    }
}
// GETパラメータに ?file=../../etc/passwdと指定すると、見えちゃう
