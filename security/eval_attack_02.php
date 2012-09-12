<?php
$string = 'こたんたにたちたわた、世界！';
// 入力された文字列が$string変数に含まれている場合だけ処理を行う
if (strpos($string, $_GET['keyword']) !== false){
    eval("echo htmlspecialchars(str_replace('" . $_GET['keyword'] . "', '', '" . $string . "'), ENT_QUOTES, 'UTF-8');");
    // echo htmlspecialchars(str_replace('た', '', 'こたんたにたちたわた、世界！'), ENT_QUOTES, 'UTF-8');
}

