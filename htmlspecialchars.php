<?php

$html = '<a href="http://example.com/">&amp;example link</a>';
echo htmlspecialchars($html, ENT_QUOTES, 'UTF-8', false); // 4番目の引数をfalseにする事で、&amp;が&amp;amp;になるのを防ぐ(重複変換フラグ)
