PHPスクリプトを実行します。
<?php
/*
サンプルのPHPスクリプトです。
*/
# ほげほげ
// ほげほげ
$number = rand();
if ($number % 2 == 0){
	echo $number, "は偶数です", PHP_EOL;
}
else {
	echo $number, "は奇数です", PHP_EOL;
}
?>

<?php
echo "コメントアウトのテストです", PHP_EOL; // この部分がコメントです
# これもコメントです。 
/* ほげほげ */ ?> この部分は省略されます。
