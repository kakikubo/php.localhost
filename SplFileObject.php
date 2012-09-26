<?php

// SplFileObjectをつかってファイルを開きます
// 今回は8章で使ったmini_blogアプリのMiniBlogApplication.phpを読み込みます
$fo = new SplFileObject('./miniblog/MiniBlogApplication.php');

// 行末の改行コードを除去するオプションをセットします。
$fo->setFlags(SplFileObject::DROP_NEW_LINE);

// LimitIteratorを使い、0行目から10行だけ出力するように制御します。
foreach (new LimitIterator($fo, 0, 10) as $key => $line){
    // 先頭に行番号をつけ、行の内容を出力します。
    printf("%4d: %s\n", $key + 1, $line);
}
