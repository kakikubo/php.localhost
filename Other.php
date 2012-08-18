<?php
namespace Other;
// 別の名前空間(Other)からProject/Module/配下のModuleを参照するには
// 完全修飾名で指定する必要がある
require_once 'Project/Module/Directory.php';
$dir1 = new \Project\Module\Directory(); // Project\Module\Directory クラス
$dir2 = new \Directory();                 // 組み込みの Directory クラス
var_dump($dir1);
var_dump($dir2);
