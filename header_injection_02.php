<?php
/** 
 * header_injection_01.php のヘッダインジェクション対応版
 */
header('Content-type: text/html; charset=utf-8');
$url = 'http://example.com/';
if (isset($_GET['page']) === true && $_GET['page'] !== ''){
    // 改行コードが含まれていた場合はヘッダを送出しない
    if (strpos($_GET['page'], "\r") !== false
    || strpos($_GET['page'], "\n") !== false)
    {
        echo '不正なリクエストを検出しました';
    } else {
        $url .= $_GET['page'];
        header('Location: ' . $url);
        exit();
    }
} else {
    echo 'ページ指定がありません。';
}
