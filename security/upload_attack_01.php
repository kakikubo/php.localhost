<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 * ※attack.txtをアップロードしてみて下さい。
 */
// アップロードされたファイルは、ドキュメントルート内のuploadsディレクトリに保存
$upload_dir = '/Users/kakikubo/Documents/php.localhost/security/uploads/';
if (empty($_FILES) === false && empty($_FILES['upfile']) === false){
    if (is_uploaded_file($_FILES['upfile']['tmp_name']) === true){
        move_uploaded_file(
            $_FILES['upfile']['tmp_name'],
            $upload_dir . $_FILES['upfile']['name']
        );
        // アップロード成功画面を出力
        echo <<<EOF
<html>
    <head>
        <title>アップロード成功</title>
        <meta http-equiv="refresh" content="3; url=./upload_attack_01.php"/>
    </head>
    <body>
    ファイルのアップロードに成功しました
    </body>
</html>
EOF;
    } else {
        echo 'ファイルアップロード攻撃をうけた可能性があります';
        echo 'ファイル名:'
        . htmlspecialchars($_FILES['upfile']['name'], ENT_QUOTES, 'UTF-8')
        . ' / ';
    }
}

// ファイルアップロードフォームを出力
echo <<<EOF
<html>
    <head>
        <title>ファイルアップロード</title>
        <body>
            <form action="" method="post" enctype="multipart/form-data">
                <!-- 最大サイズ -->
                <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                <input type="file" name="upfile" />
                <input type="submit" value="アップロード" />
            </form>
       </body>
    </head>
</html>
EOF;
// FIXME このサンプルは、そもそもきちんと動作していない気がする
