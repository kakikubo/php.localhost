<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
/**
 * 認証用の関数
 * ダミーなので常にtrueを返しています
 */
function check_auth(){
    return true;
}

// セッションを有効にする
session_start();
header('Content-type: text/html; charset=utf-8');

// ユーザIDがセッション変数に存在すれば、ログインユーザ専用ページを出力
if (isset($_SESSION['user_id'])){
    // ログインユーザ専用ページを表示する
    echo 'ログインユーザ専用ページです<br/>';
    echo 'あなたのセッションIDは ' . session_id() . 'です'; // 脆弱性の確認用
} elseif (
    strtolower($_SERVER['REQUEST_METHOD']) === 'post'
    && isset($_POST['op']) === true
    && $_POST['op'] === 'login'
    && check_auth() === true
){
    // ログイン処理の実行：開始
    // ログイン処理の実行：終了
    $_SESSION['user_id'] = 1; // ダミーのユーザIDをセッションに格納
    // ログイン成功画面を出力
    $script = basename($_SERVER['SCRIPT_FILENAME']);
    echo <<<EOF
<html>
<head>
    <title>ログイン成功</title>
    <meta http-equiv="refresh" content="3; url=./{$script}" />
</head>
<body>
    ログインに成功しました
</body>
</html>
EOF;
} else {
    // ログインフォームを表示する
    echo <<<EOF
<form action="" method="post">
<input type="hidden" name="op" value="login" />
<input type="submit" name="login_button" value="ログイン" />
</form>
EOF;
}
