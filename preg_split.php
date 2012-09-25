<?php
$test = "foo\tbar\nbaz";
$pattern = '/[\s]+/';
$result = preg_split($pattern, $test);
var_dump($result);
