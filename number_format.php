<?php

echo number_format(100000000), PHP_EOL;
echo number_format(100000000, 5), PHP_EOL; // 第２引数に小数点以下の桁数を指定できる
echo number_format(100000000, 5, ',', ' '), PHP_EOL; // フランス語表記(第３引数に少数の区切り文字。第４引数に千の位ごとの区切り文字を指定できる)


