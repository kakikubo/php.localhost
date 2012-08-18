<?php
$string1 = 'this is string';
$string2 = "this is string";
$string3 = 'hi $string2 is string \n ';
$string4 = "hi $string2 is string \n ";
echo $string1,PHP_EOL;
echo $string2,PHP_EOL;
echo $string3,PHP_EOL;
echo $string4,PHP_EOL;

$age = 15;

// $age という変数だが、どこまでが変数だかわからない
# echo "$ageyears old",PHP_EOL;
// 波括弧で変数名を囲む
echo "${age}years old",PHP_EOL;

$foo = <<<EOI
ヒアドキュメントでは、このように
複数行にわたる文章はそのまま表記することができます。
Tom の年齢は "$age" 歳です。
EOI;
echo $foo, PHP_EOL;

$boo = <<<'EOI'
Nowdoc では、終端識別子をシングルクォートで囲みます。
複数行にわたる文章をそのまま表記する事ができます。

Tom の年齢は "$age" 歳です。
この $age は展開されず、 $age のまま出力されます。
EOI;
echo $boo, PHP_EOL;
class NowDocTest
{
	const DOCUMENT1 = <<<'EOI'
変数やエスケープ文字を展開しないため、文字列がパースできません。
このため、constに指定できます。
EOI;

	const DOCUMENT2 = <<<EOI
PHP5.3からは、変数を含まない、または、ドル文字が適切にエスケープ
されていれば、ヒアドキュメントもconstに指定できます。
ドルを含んだ文章は、\$foo のようにドル文字をエスケープします。
EOI;
}

echo 15.0,PHP_EOL;//文字列→整数→15と出力される？？？よくわかんない
echo "15.0",PHP_EOL;
printf('%.1f', 15.0);
