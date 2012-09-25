<?php
$test = '2010-04-01';
$pattern = '/(\d{4})-(\d{2})-(\d{2})/';
$replacement = '$3/$2/$1';
$result = preg_replace($pattern, $replacement, $test);
echo $result, PHP_EOL;

