<?php 
$string = 'The perfect PHP';

echo 'default: ', $string, PHP_EOL;
echo 'strtolower: ', strtolower($string), PHP_EOL;
echo 'strtoupper: ', strtoupper($string), PHP_EOL;
echo 'ucfirst: ', ucfirst($string), PHP_EOL;
echo 'lcfirst: ', lcfirst($string), PHP_EOL;
echo 'ucwords: ', ucwords($string), PHP_EOL;

$mbstring = 'Ｔｈｅ　ｐｅｒｆｅｃｔ　ＰＨＰ';
echo 'mb_strtolower: ', mb_strtolower($string), PHP_EOL;
echo 'mb_strtoupper: ', mb_strtoupper($string), PHP_EOL;

