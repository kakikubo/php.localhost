<?php
// nullバイトが含まれていた場合は処理終了
if (strpos($_GET['design'], "\0") !== false){
    echo "detected null-byte";
    exit();
}

// 「red.html」、「blue.html」以外の読み込み指定があったら処理終了
$allow_files = array('red','blue');
if (in_array($_GET['design'], $allow_files, true) === false){
    echo "detected excludes red or blue";
    exit();
}
// 指定されたファイルをインクルード
include '/var/www/html/design' . $_GET['design'] . '.html';
