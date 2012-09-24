<?php
ini_set('mbstring.internal_encoding', 'UTF-8'); // 文字コードがphp.iniで指定されていない場合は必ず指定する
$str = '2010年05月16日';
echo mb_substr($str, 5), PHP_EOL;
echo mb_substr($str, 5, 3), PHP_EOL;
