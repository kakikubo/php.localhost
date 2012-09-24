<?php
ini_set('mbstring.internal_encoding','UTF-8');
$kana = "半角ｶﾅを全角カナに、全角ＥＩＳＵＵを半角EISUUに変換します";
echo mb_convert_kana($kana, "KVa");
