<?php
// stringcast.php
if (!isset($argv[1])){
  exit;
}

$num = $argv[1];
if ($num == 100){ // 引数に100を指定した場合、"100"->100とキャストされた後の値と比較している事に注意
  echo "num is 100", PHP_EOL;
} else {
  echo "num is not 100", PHP_EOL;
}

if ($num === 100){ // こっちだと一致しない筈(厳密な一致)
  echo "num is 100", PHP_EOL;
} else {
  echo "num is not 100", PHP_EOL;
}
