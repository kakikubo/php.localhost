<?php
// require.php
require_once 'Somelib1.php';
// require_once 'Somelib2.php';
include 'hogehoge.php'; //存在しないファイルを読むとincludeの場合はWarningのみ
echo "出力します", PHP_EOL;

$obj = new Somelib(); // 読み込んだファイルに定義されているクラスを利用できる
