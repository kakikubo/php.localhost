<?php
echo 'テストプログラム開始',PHP_EOL;

echo (int)$foo, PHP_EOL; // null→空文字列→(int)でキャストしてるので→0
echo FOO, PHP_EOL; // FOOという文字列とみなされる

echo 'テストプログラム終了',PHP_EOL;
