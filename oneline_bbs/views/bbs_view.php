<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ja">
<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>ひとこと掲示板</title>
</head>
<body>
	   <h1>ひとこと掲示板</h1> 

	   <form action="bbs.php" method="post">
	   <?php if (count($errors)): ?>
	   <ul class="error_list">
		 <?php foreach ($errors as $error): ?>
		 <li>
		   <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
		 </li>
		 <?php endforeach; ?>
	   </ul>
	   <?php endif; ?>
		 名前：<input type="text" name="name" /><br />
		 ひとこと：<input type="text" name="comment" size="60" /><br />
		 <input type="submit" name="submit" value="送信" />
	   </form>

	<?php if (count($posts) > 0): ?>
	<ul>
		<?php foreach ($posts as $post): ?>
		<li>
	    	<?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?>:
        	<?php echo htmlspecialchars($post['comment'], ENT_QUOTES, 'UTF-8'); ?>
			- <?php echo htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8'); ?>
        </li>
	    <?php endforeach; ?>
	</ul>
	<?php endif; ?>
</body>
</html>
