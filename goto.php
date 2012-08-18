<?php
$is_error = true;
if ($is_error){
		goto error;
}


error:
	echo "エラーが発生しました",PHP_EOL;
	exit(1);

