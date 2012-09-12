<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
if (isset($_GET['file']) === true && $_GET['file'] !== ''){
    // GET変数で指定されたファイルが存在し、テキストファイルであれば内容を出力
    if (file_exists($_GET['file']) === true &&
    substr($_GET['file'], -4) === '.txt')
    {
        readfile($_GET['file']);
    }
}

// http://php.localhost/security/null_byte_attack_01.php?file=/etc/passwd%00.txt としてアクセスすると
// /etc/passwdの中身がでてきてしまう(らしいのだけど、再現しなかった)
