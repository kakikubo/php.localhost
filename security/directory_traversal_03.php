<?php
if (isset($_GET['file']) === true && $_GET['file'] !== ''){
    // 指定されたファイル名に「..」が含まれていたら終了(ブラックリスト対策)
    if (strpos($_GET['file'], '..') !== false){ // 「..」が先頭でみつかった場合、0となるので、「!=」 だとダメ
        exit();                                 // 0 != false は偽となる(型チェックなし。先にすすんでしまう)
                                                // 0 !== false は真となる(exitされる)
    }
    // GET変数で指定されたファイルが /var/wwwに存在すれば内容を出力
    $file = '/var/www/' . $_GET['file'];
    if (file_exists($file) === true){
        readfile($file);
    }
}
// GETパラメータに ?file=../../etc/passwdと指定しても、4行目でひっかかって、処理が終了する
