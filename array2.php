<?php

$array = array('cake', 'pudding',);
var_dump($array);
$cake = array_shift($array);
var_dump($array);
array_unshift($array, 'candy', 'chocolate');
var_dump($array);
$pudding = array_pop($array);
var_dump($array);
array_push($array, 'marshmallow', 'cookie');
var_dump($array);

sort($array);
var_dump($array);
rsort($array);
var_dump($array);
