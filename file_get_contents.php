<?php
$filename = "./logfile.txt";
echo mb_strlen(file_get_contents($filename)), PHP_EOL;

$website = file_get_contents('http://gihyo.jp/');

if (!strpos($http_response_header[0], '200')){
    echo 'Request Failed!', PHP_EOL;
    echo implode(PHP_EOL, $http_response_header);
    exit(255);
}

if (preg_match('/<title>([^<]+)<\/title>/u', $website, $matches)){
    echo "Title: {$matches[1]}", PHP_EOL;
} else {
    echo 'No Title', PHP_EOL;
}

