<?php
$test = 'The *important* thing.';
$word = '*important*';
$pattern = '/' . preg_quote($word) . '/';
echo "pattern is :" , $pattern , PHP_EOL;
$replacement = '<strong>' . $word . '</strong>';
$result = preg_replace($pattern, $replacement, $test);
var_dump($result);
