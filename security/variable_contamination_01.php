<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
// register_globals の対応として、GET変数を展開する
foreach ($_GET as $key => $value){
    $$key = $value;
}
// GET変数を利用した処理 開始
// .....
// GET変数を利用した処理 開始
echo 'あなたのIPアドレスは"' . $_SERVER['REMOTE_ADDR'] . '"です';
// ?_SERVER[REMOTE_ADDR]=1234をURLにつけてアクセスすると、改ざんできてしまう
