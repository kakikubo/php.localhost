<?php

$array = array(1,2,3,4,5);

$filtered = array_filter($array, function($v){
    return $v > 3;
});
var_dump($filtered);
