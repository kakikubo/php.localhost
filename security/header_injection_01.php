<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
/**
 * このページに対して ?page=1 を付与してアクセスした場合、
 * http://example.com/1 にリダイレクトされます。
 * ?page=dummy%0d%0aLocation%3a%20http%3a%2f%2fgihyo%2ejp%2fbook を付与して
 * アクセスした場合は gihyo.jp/book にリダイレクトされてしまいます。
 * (PHP 5.1.2 以上では以下のWarningを吐いて終了するので、対策は不要
 * Warning: Header may not contain more than a single header, 
 * new line detected in /Users/kakikubo/Documents/php.localhost/header_injection_01.php on line 19)
 * Headerに改行を含んでいるので,正常に処理されないパターン↑
 */
header('Content-type: text/html; charset=utf-8');
$url = 'http://example.com/';
if (isset($_GET['page']) === true && $_GET['page'] !== ''){
    $url .= $_GET['page'];
    header('Location: ' . $url);
    exit();
} else {
    echo 'ページ指定がありません。';
}
