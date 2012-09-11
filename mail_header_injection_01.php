<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
// 文字コードを明示的に指定する
mb_language('ja');
mb_internal_encoding('utf-8');

$message = '';

// POSTの場合、送信処理を実行する
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post'){
    $result = mb_send_mail(
        'admin@example.com',
        $_POST['subject'],
        $_POST['body'],
        'From: ' . $_POST['from']
    );
    if ($result === true){
        $message = 'メールを送信しました';
    } else {
        $message = 'メールの送信に失敗しました';
    }
}

// メール送信フォームを表示
header('Content-type: text/html; charset=utf-8');
echo <<<EOF
<html>
    <head>
        <title>お問い合わせ</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    </head>
    <body>
        $message<br/>
        <fieldset>
            <legend>お問い合せフォーム</legend>
            <form action="" method="post">
                件名<input type="text" name="subject" /><br/>
                メール<input type="text" name="from" /><br/>
                内容<textarea name="body"></textarea><br/>
                <input type="submit" value="メール送信"/>
            </form>
        </fieldset>
    </body>
</html>
EOF;
