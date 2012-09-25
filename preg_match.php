<?php
$string = 'abc123';
$pattern = '/[0-9]/';
if (preg_match($pattern, $string, $matches)){
    var_dump($matches);
}


// 純粋に文字があるかどうかを検索するだけならstrposを使おう
$string = 'perfect-php';
if (false !== strpos($string, 'php')){
    echo 'マッチしました', PHP_EOL;
} else {

    echo 'マッチしません', PHP_EOL;
}

// 郵便番号のマッチング(7桁の数字をマッチさせる)
$zipcode = '1234567';
if (preg_match('/^\d{7}$/', $zipcode, $matches)){
    var_dump($matches);
}

// -(ハイフン)が入るケースでの対応
$test = '123-4567';
$pattern = '/^(\d{3})-?(\d{4})$/';
if (preg_match($pattern, $test, $matches)){
    $zipcode = $matches[1] . $matches[2];
    echo "Matched" , $zipcode, PHP_EOL;
} else {
    echo "Unmatched" . PHP_EOL;
}
// メールアドレスのマッチング
$test = 'test@example.com';
$pattern = '/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i';
// 上記は配列になる時、( 1 )@( ( 3 ) 2 ) となる。?:を指定する事で配列の中に入らないようにしている
if (preg_match($pattern, $test, $matches)){
    var_dump($matches);
}

