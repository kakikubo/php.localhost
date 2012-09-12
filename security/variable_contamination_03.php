<?php
// ホワイトリストとして利用するGET変数のキーを設定
$white_list = array('foo', 'bar');
// register_globals の対応として、GET変数を展開する
foreach ($_GET as $key => $value){
    // GET変数のキーがホワイトリストに含まれていなければ終了
    if (in_array($key, $white_list) === false){
        echo 'ホワイトリストに無い為、ダメー';
        exit();
    }
    $$key = $value;
}
// GET変数を利用した処理 開始
// .....
// GET変数を利用した処理 開始
echo 'あなたのIPアドレスは"' . $_SERVER['REMOTE_ADDR'] . '"です';
// ?_SERVER[REMOTE_ADDR]=1234をURLにつけてアクセスしても、
// 8行目で引っかかるので、実行されない
