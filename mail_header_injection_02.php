<?php
/**
 * mail_header_injection_01.phpの脆弱性対応版です。
 */
// 文字コードを明示的に指定する
mb_language('ja');
mb_internal_encoding('utf-8');

$message = '';

// POSTの場合、送信処理を実行する
if (strtolower($_SERVER['REQUEST_METHOD']) === 'post'){
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $from = $_POST['from'];
    // メールヘッダの利用部分に改行コードが含まれていないか確認
    $is_newline = false;
    if (preg_match('/[\r\n]/', $subject) != false
    || preg_match('/[\r\n]/', $from) != false)
    {
        $is_newline = true;
    }
    if ($is_newline === false){
        $result = mb_send_mail(
            'admin@example.com',
            $subject,
            $body,
            'From: ' . $from
        );
        if ($result === true){
            $message = 'メールを送信しました';
        } else {
            $message = 'メールの送信に失敗しました';
        }
    } else {
        $message = 'メールの送信を中止しました';
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
