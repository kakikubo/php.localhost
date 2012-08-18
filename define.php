<?php

define('BOOK','Perfect PHP');
echo BOOK, PHP_EOL;

const BOOK2 = 'Perfect PHP2';
echo BOOK2, PHP_EOL;

$value = 'BOOK2';
echo constant($value), PHP_EOL;

echo PHP_VERSION, PHP_EOL;
echo PHP_OS, PHP_EOL;
echo PHP_EOL, PHP_EOL;
echo STDIN, PHP_EOL;
echo "hoge", PHP_EOL;
echo E_WARNING, PHP_EOL;
echo "hoge", PHP_EOL;

// var_dump(get_defined_constants());


echo __FILE__, PHP_EOL;
echo __DIR__, PHP_EOL;
echo __LINE__, PHP_EOL;
echo __FUNCTION__, PHP_EOL;
echo __CLASS__, PHP_EOL;
echo __METHOD__, PHP_EOL;
echo __NAMESPACE__, PHP_EOL;
