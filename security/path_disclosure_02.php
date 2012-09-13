<?php
/**
 * エラーレポートの設定を最初(5行目〜7行目)に行う
 */
ini_set('display_errors', 0);     // エラーを画面に出力しない設定
ini_set('log_errors', 1);         // エラーをログに記録する設定
ini_set('error_log', '/tmp/php_error.log'); // エラー・ログの指定

// GET変数で指定があった場合は、出力する$string変数にセット
if (isset($_GET['string']) === true){
    $string = $_GET['string'];
} else {
    $string = '';
}
// $string変数をエスケープして出力
echo htmlspecialchars($string, ENT_QUOTES, "UTF-8");
