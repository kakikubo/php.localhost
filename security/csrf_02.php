<?php
/**
 * csrf_01.phpにワンタイムトークンを加えて脆弱性対処を行ったもの
 */

/**
 * 管理者かチェックする関数
 */
function is_admin(){
    if (isset($_SESSION['is_admin']) === true
    && $_SESSION['is_admin'] === true)
    {
        $is_admin = true;
    } else { 
        $is_admin = false;
    }
    return $is_admin;
}
/** 
 * ワンタイムトークンを生成する関数
 */
function get_token($key = ''){
    $_SESSION['key'] = $key;
    $token = sha1($key);
    return $token;
}
/**
 * ワンタイムトークンをチェックする関数
 */
function check_token($token = ''){
    return ($token === sha1($_SESSION['key']));
}

// セッション開始
session_start();
header('Content-type: text/html; charset=utf-8');



// POSTだった場合は、指定された処理を実行
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post'){
    // 管理者かチェック
    if (isset($_POST['op']) === true
    && $_POST['op'] === 'delete'
    && is_admin() === true)
    {
        // 監理者ならワンタイムトークンを確認
        if (isset($_POST['token']) === false
        || check_token($_POST['token']) === false)
        {
            // ワンタイムトークン不正の為、削除は行わない
            echo 'CSRF攻撃を受けた可能性があります';
        } else {
            //管理者ならば削除処理を行う
            echo '記事の削除を行いました';
        }
    } else if (isset($_POST['op']) === true
    && $_POST['op'] === 'login')
    {
        // ログイン処理を実行
        $_SESSION['is_admin'] = true;
        echo '管理者としてログインしました';
    } else {
        // 監理者以外なのでエラー表示
        echo '権限がありません';
    }
}

// セッション内のワンタイムトークン用文字列を削除
if (isset($_SESSION['key']) === true){
    unset($_SESSION['key']);
}

// ワンタイムトークンを取得
$token = get_token(session_id() . '_' . microtime());

// 記事削除画面を出力
echo <<<EOF
<html>
    <head>
        <title>記事削除画面</title>
    </head>
    <body>
        <fieldset>
            <legend>監理者ログインフォーム</legend>
            <form action="" method="post">
                <input type="hidden" name="op" value="login" />
                <input type="submit" value="監理者としてログインする" />
            </form>
        </fieldset>
        <fieldset>
            <legend>記事削除フォーム</legend>
            <form action="" method="post">
                <input type="hidden" name="op" value="delete" />
                <input type="hidden" name="token" value="$token" />
                <input type="submit" value="記事を削除" />
            </form>
        </fieldset>
    </body>
</html>
EOF;
