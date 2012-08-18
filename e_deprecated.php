<?php
echo 'テストプログラム開始',PHP_EOL;
$tags_string = 'one,two,three';
$tags = split(',', $tags_string);
$tags = preg_split('/,/', $tags_string); //preg_splitだとE_DEPRECATEDが発生しない
echo 'テストプログラム終了',PHP_EOL;

