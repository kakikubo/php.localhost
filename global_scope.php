<?php
$array = array(1,2,3,4,5,);
foreach ($array as $i){
	echo $i, PHP_EOL;
}
echo "Last: ", $i, PHP_EOL;

// 名前空間が宣言されてない場合は、相対的な修飾名で指定できる
require_once 'Project/Module/Directory.php';

$dir = new Project\Module\Directory();
