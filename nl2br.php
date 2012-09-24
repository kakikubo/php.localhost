<?php
$contents = <<<EOI
それぞれの末尾には改行文字がはいっており、
brタグは入っていませんが、nl2br()関数を使うと
HTMLでも改行を表すbrタグを挿入してくれます。
EOI;
echo nl2br($contents, true); // 第２引数のboolはfalseだとXHTML準拠にならない(<br>になる。準拠すると<br />)
