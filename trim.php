<?php

$string = "\tThe String\n";

echo "original: ", PHP_EOL;
var_dump($string);

echo "trim: ", PHP_EOL;
var_dump(trim($string));

echo "ltrim: ", PHP_EOL;
var_dump(ltrim($string));

echo "rtrim: ", PHP_EOL;
var_dump(rtrim($string));

echo "trim (with option): ", PHP_EOL;
var_dump(trim($string, "\ngnT\t"));


