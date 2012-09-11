<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
// おみくじの結果をランダムに取得
$fortune = array(
    0 => '大吉',
    1 => '中吉',
    2 => '小吉',
    3 => '末吉',
    4 => '凶',
    5 => '大凶',
);
$key = rand(0,5);
if (isset($_GET['username'])){
    // echo $_GET['username'] . "さんの運勢は" . $fortune[$key] . "です。"; //このコードは脆弱
    echo htmlspecialchars($_GET['username'], ENT_QUOTES, 'UTF-8') . "さんの運勢は" . $fortune[$key] . "です。"; 
}
// おみくじ用のフォームを出力
echo '<form action="">';
echo 'お名前<input type="text" name="username" />';
echo '<input type="submit" value="占ってみる" />';
echo '</form>';
// 以下のURLに対してアクセスすると、gihyo.jp に飛ばされてしまう
// http://php.localhost/xss_01.php?username=%3Cscript%3Ewindow.location.href%3D%22http%3A%2F%2Fgihyo.jp%2Fbook%22%3B%3C%2Fscript%3E

