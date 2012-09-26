<?php
$filename = './logfile.txt';

// 対象のファイルが存在する場合、書き込み可能かどうかを調べます。
// そうでなければ(||)、このディレクトリに書き込み可能かを調べます。
if (!file_exists($filename) && !is_writable($filename) || !is_writeable(dirname($filename))){
    echo "Error: cannot write to $filename. ", PHP_EOL;
    exit(255);
}

// ファイルを追記モードで開きます。ファイルがない場合は作られます。
// fopen の返り値はファイルストリームへのリソース型です。
// ファイルをopenできなかった場合はdie()関数で処理を中断します
$fp = fopen($filename, 'a') or die('ファイルを開けません');

// 文字列を指定したリソースへ書き込みます。
fwrite($fp, sprintf("[%15.3f] ログファイルへの書き込み\n", microtime(true)));

// リソースをとじます
fclose($fp);
