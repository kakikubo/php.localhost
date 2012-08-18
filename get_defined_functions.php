<?php

function add($v1, $v2){
		return $v1 + $v2;
};
$ar = get_defined_functions();

var_dump($ar["internal"]);
var_dump($ar["user"]);

