<?php
if (isset($_GET['file']) === true && $_GET['file'] !== ''){
    $file = str_replace("\0", "", $_GET['file']); // nullバイトを削除
    $file = '/var/www/' . basename($file);        // ファイル名以外の部分を削除
    // GET変数で指定されたファイルが /var/wwwに存在すれば内容を出力
    if (file_exists($file) === true){
        readfile($file);
    }
}
// GETパラメータに ?file=../../etc/passwdと指定しても、4行目でひっかかって、処理が終了する
//
// 他、PHP 5.3.0 以降では open_basedir関数を利用する事でも対策が可能
// ini_set('open_basedir', '/var/www'); // php.ini か httpd.conf に設定可能 
