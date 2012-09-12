<?php
echo var_dump($_GET) . '<br/>';
// ブラックリストとしてスーパーグローバル変数の変数名を設定
$black_list = array('GLOBALS', '_SERVER', '_GET', '_POST', '_FILES', '_COOKiE', '_REQUEST', '_SESSION', '_ENV');

// リクエストがスーパーグローバル変数の変数名なら終了
foreach (array($_GET, $_POST, $_COOKIE) as $request){
    foreach ($black_list as $super_global){
        if (isset($request[$super_global]) === true){
            echo var_dump($request[$super_global]) . 'はダメです。';
            exit();
        }
    }
}

// register_globals の対応として、GET変数を展開する
foreach ($_GET as $key => $value){
    $$key = $value;
}
// GET変数を利用した処理 開始
// .....
// GET変数を利用した処理 開始
echo 'あなたのIPアドレスは"' . $_SERVER['REMOTE_ADDR'] . '"です';
// ?_SERVER[REMOTE_ADDR]=1234をURLにつけてアクセスしても、
// 8行目で引っかかるので、実行されない
