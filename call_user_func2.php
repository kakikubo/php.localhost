<?php
// phpのマニュアルより
function foobar($arg, $arg2){
    echo __FUNCTION__, " got $arg and $arg2\n";
}
call_user_func_array("foobar", array("one", "two"));

class foo{
    function bar($arg, $arg2){
        echo __METHOD__, " got $arg and $arg2\n";
    }
}
$foo = new foo;
call_user_func_array(array($foo, "bar"), array("three", "four"));
