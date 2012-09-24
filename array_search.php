<?php
$array = array(
    'banana' => 'yellow',
    'apple'  => 'red',
    'orange' => 'orange',
    'lemon'  => 'yellow',
);

var_dump(in_array('yellow', $array));
var_dump(array_search('yellow', $array));

$array2 = array('1', '2', '3');
var_dump(in_array(2, $array2));
var_dump(in_array(2, $array2, true));

