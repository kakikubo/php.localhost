<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */

/**
 * 入力されたユーザ名とパスワードを元に、ユーザが存在するか確認する
 */
function check_user($name, $pass){
    $query = "SELECT * from users WHERE name = '$name' AND pass = '$pass'";
    $result = mysql_query($query);
    // クエリ実行の戻り値がfalseでなければ、クエリ実行自体は正常
    if ($result !== false){
        // 取得したレコード数が1以上ならログイン成功
        $rows = mysql_num_rows($result);
        if ($rows >= 1){
            return true;
        }
    }
    return false;
}

// POSTの場合はログインチェック
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post'){
    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('perfect');
    $result = check_user($_POST['name'], $_POST['pass']);
    if ($result === true){
        echo '<span style="color: #0000ff">ログインに成功しました</span>';
    } else {
        echo '<span style="color: #ff0000">ログインに失敗しました</span>';
    }
    mysql_close($conn);
    exit();
}
// ログインフォームを表示
header('Content-type: text/html; charset=utf-8');
echo <<<EOF
<html>
    <head>
        <title>ログイン画面</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <fieldset>
            <legend>ログインフォーム</legend>
            <form action="" method="post">
            ユーザ名<input type="text" name="name" value="" /><br/>
            パスワード<input type="text" name="pass" value="" /><br/>
            <input type="submit" value="ログインする" />
            </form>
        </fieldset>
    </body>
</html>
EOF;


