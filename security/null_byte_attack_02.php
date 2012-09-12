<?php
/**
 * 文字列中のnullバイトを削除する関数
 * 引数が配列の場合は、配列の要素に対して再帰的に処理を行う
 */
function delete_null_byte($value)
{
    if (is_string($value) === true){
        $value = str_replace("\0", "", $value);
    } elseif (is_array($value) === true){
        $value = array_map('delete_null_byte', $value);
    }
    return $value;
}

// 変数内のnullバイトを削除
$_GET     = delete_null_byte($_GET);           // $_GET内のnullバイトを削除
$_POST    = delete_null_byte($_POST);          // $_POST内のnullバイトを削除
$_COOKIE  = delete_null_byte($_COOKIE);        // $_COOKIE内のnullバイトを削除
$_REQUEST = delete_null_byte($_REQUEST);       // $_REQUEST内のnullバイトを削除

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
// http://d.hatena.ne.jp/t_komura/20110306/1299414742 をみると、php 5.3.4 以降では対策が施されている
// 模様です。
