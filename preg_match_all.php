<?php
$test = 'abc 123 def abc 345';
$pattern = '/abc/';
if (preg_match_all($pattern, $test, $matches)){
    var_dump($matches);
}

