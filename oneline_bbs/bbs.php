<?php
// デフォルトのタイムゾーンをセット(date関数の為に)
date_default_timezone_set('Asia/Tokyo');


// データベースに接続
$link = mysql_connect('localhost:/opt/local/var/run/mysql5/mysqld.sock', 'root', '');
if (!$link){
  die('データベースに接続できません: ' . mysql_error());
}

// データベースを選択する
mysql_select_db('oneline_bbs', $link);

$errors = array(); // エラー格納用の配列を準備

// POSTなら保存処理実行
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  // 名前が正しく入力されているかチェック
  $name = null;
  if (!isset($_POST['name']) || !strlen($_POST['name'])){
    $errors['name'] = '名前を入力してください';
  } else if (strlen($_POST['name']) > 40){
    $errors['name'] = '名前は40文字以内で入力してください';
  } else {
    $name = $_POST['name'];
  }

  // ひとことが正しく入力されているかチェック
  $comment = null;
  if (!isset($_POST['comment']) || !strlen($_POST['comment']) ){
    $errors['comment'] = 'ひとことを入力してください';
  } else if (strlen($_POST['comment']) > 200){
    $errors['comment'] = 'ひとことは200文字以内で入力してください';
  } else {
    $comment = $_POST['comment'];
  }

  // エラーがなければ保存
  if (count($errors) === 0){
    // 保存するためのSQL文を作成
    $sql = "INSERT INTO `post` (`name`, `comment`, `created_at`) VALUES ('"
      . mysql_real_escape_string($name) . "','"
      . mysql_real_escape_string($comment) . "','"
      . date('Y-m-d H:i:s') . "')";
    // 保存する
    mysql_query($sql, $link);
    header('Location: http://' .$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
  }
}

?>
<?php
// 投稿された内容を取得するSQLを作成して結果を取得
$sql = "SELECT * FROM `post` ORDER BY `created_at` DESC";
$result = mysql_query($sql, $link);

// 取得した結果を$postsに格納
$posts = array();
if ($result !== false && mysql_num_rows($result)){
  while ($post = mysql_fetch_assoc($result)){
    $posts[] = $post;
  }
}	
// 取得結果を解放して接続を閉じる
mysql_free_result($result);
mysql_close($link);
include 'views/bbs_view.php';
?>
