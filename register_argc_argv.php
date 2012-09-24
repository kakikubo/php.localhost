<?php

if (!ini_get('register_argc_argv')){
    echo 'register_argc_argv is not enabled', PHP_EOL;
    exit(255);
}

if ($argc == 1){
    echo 'オプションが指定されていません', PHP_EOL;
    exit(255);
}

echo "プログラムの実行: {$argv[0]}", PHP_EOL;
array_shift($argv);
echo '次のオプションが実行されます: ', implode(', ', $argv), PHP_EOL;



