<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 *
 * このPHPで監理者権限を得た後で、csrf.htmlにアクセスすると、
 * 勝手に記事の削除が行えてしまいます。
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

// セッション開始
session_start();

// POSTだった場合は、指定された処理を実行
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post'){
    // 管理者かチェック
    if (isset($_POST['op']) === true
    && $_POST['op'] === 'delete'
    && is_admin() === true)
    {
        //管理者ならば削除処理を行う
        echo '記事の削除を行いました';
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
                <input type="submit" value="記事を削除" />
            </form>
        </fieldset>
    </body>
</html>
EOF;
