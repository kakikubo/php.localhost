<?php
// 一覧を出力するディレクトリを$dirにセット
if (isset($_GET['dir']) === true){
    // nullバイトを削除
    $dir = str_replace("\0", "", $_GET['dir']);
} else {
    $dir = '/';
}

// ディレクトリ内のファイル一覧を出力
echo "<pre>";
if (file_exists($dir) && is_dir($dir)){
    // 外部コマンドへの引数をエスケープして実行
    system('ls -la ' . escapeshellarg($dir) );
}
echo "</pre>";
// ?dir=%3b%20touch%20%2Ftmp%2Fcommand_injection%3B%20chmod%20666%20%2Ftmp%2Fcommand_injection%0D%0A
// をつけてアクセスすると、ls -la ; touch /tmp/command_injection; chmod 666 /tmp/command_injection と
// 解釈されて、ファイルができてしまう…らしいが、実際はうまくいかなかった
