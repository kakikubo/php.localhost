<?php
ini_set('mbstring.internal_encoding', 'UTF-8');

$string = 'この関数は、長い文字列を省略する際に便利です。ちょうど、Webサイトによく見られる、
本文を途中で区切り、「続きを読む」のリンクを貼るような処理に多く用いられます。';

echo mb_strimwidth($string, 0, 99, '...');
