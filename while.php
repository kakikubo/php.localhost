<?php
$i = 0;
while ( $i < 10 ) {
	echo $i, PHP_EOL;
	$i++;
	}


$i = 0;
do {
	echo $i, PHP_EOL;
	$i++;
} while ($i < 10);

$array = array(1,2,3,4,5,);
for ($i = 0, $end = count($array); $i < $end; ++$i){
  // echo $end, PHP_EOL;
  echo $array[$i], PHP_EOL;
  }

foreach ($array as $value) {
  echo $value, PHP_EOL;
}

$fruits_color = array(
  'apple' => 'red',
  'banana' => 'yellow',
  'orange' => 'orange',
  );

foreach ($fruits_color as $name => $color){
	echo "$name is $color", PHP_EOL;
	}

echo "$name is $color", PHP_EOL;

foreach ($fruits_color as &$color){
	$color = "black";
	}
foreach ($fruits_color as $name => $color){
	echo "$name is $color", PHP_EOL;
	}
	echo "$name is $color", PHP_EOL;
	unset($color);
	echo "$name is $color", PHP_EOL;

$dice = range(1,6);
shuffle($dice);
foreach ($dice as $value){
  echo $value,PHP_EOL;
  if ($value === 6){
    break;
  }
}
echo "hogehgoe<br>";
foreach ($dice as $value){
  if ($value % 2 !== 0){
    continue;
  }
    echo $value,PHP_EOL;
}

$hour = date('G'); //現在の時刻を取得
echo $hour,PHP_EOL;
var_dump($hour);
if ($hour === '6'){
  echo "朝の６時です、おはよう御座います", PHP_EOL;
} elseif ($hour === '12'){
  echo "正午",PHP_EOL;
} elseif ($hour === '15'){
  echo "おやつ",PHP_EOL;
} else {
  echo "どうも",PHP_EOL;
}

// 上記をswitchで書きなおしたのが以下
switch ($hour){
  case '6':
    echo "朝の６時です、おはよう御座います", PHP_EOL;
	break;
  case '12':
    echo "正午",PHP_EOL;
	break;
  case '15':
    echo "おやつ",PHP_EOL;
	break;
  case '22':
  case '23':
  case '0':
    echo "ねろ",PHP_EOL;
	break;
  default:
    echo "どうも",PHP_EOL;
	break;
	}

