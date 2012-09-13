<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
// GET変数で指定があった場合は、出力する$string変数にセット
if (isset($_GET['string']) === true){
    $string = $_GET['string'];
} else {
    $string = '';
}

// $string変数をエスケープして出力
echo htmlspecialchars($string, ENT_QUOTES, "UTF-8");
/**
 * http://php.localhost/security/path_disclosure_01.php?string=1234 でアクセスすると「1234」が出力される。
 * http://php.localhost/security/path_disclosure_01.php?string[]=1234 でアクセスすると、
 * Warning: htmlspecialchars() expects parameter 1 to be string, array given in /Users/kakikubo/Documents/php.localhost/security/path_disclosure_01.php on line 14
 * となる。
 */

