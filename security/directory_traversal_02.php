<?php
if (isset($_GET['file']) === true && $_GET['file'] !== ''){
    // 指定されたファイルがfile1かfile2でなければ終了(ホワイトリストでの対策)
    if (! in_array($_GET['file'], array('file1', 'file2'))){
        exit();
    }
    // GET変数で指定されたファイルが /var/wwwに存在すれば内容を出力
    $file = '/var/www/' . $_GET['file'];
    if (file_exists($file) === true){
        readfile($file);
    }
}
// GETパラメータに ?file=../../etc/passwdと指定しても、4行目でひっかかって、処理が終了する
