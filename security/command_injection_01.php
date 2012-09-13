<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
// 一覧を出力するディレクトリを$dirにセット
if (isset($_GET['dir']) === true){
    $dir = $_GET['dir'];
} else {
    $dir = '/';
}

// ディレクトリ内のファイル一覧を出力
echo "<pre>";
system('ls -la ' . $dir );
echo "</pre>";
// ?dir=%3b%20touch%20%2Ftmp%2Fcommand_injection%3B%20chmod%20666%20%2Ftmp%2Fcommand_injection%0D%0A
// をつけてアクセスすると、ls -la ; touch /tmp/command_injection; chmod 666 /tmp/command_injection と
// 解釈されて、ファイルができてしまう…らしいが、実際はうまくいかなかった
