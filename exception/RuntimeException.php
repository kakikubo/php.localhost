<?php

class FileSaver
{
    public function save($file, $text)
    {
        // ディレクトリを作成
        $dir = dirname($file);
        if (!is_dir($dir)){
            if (!mkdir($dir, 0777, true)){
                throw new RuntimeException('Cannot make directory ' . $dir);
            }
        }
        // ファイル保存処理
    }

}

$saver = new FileSaver();
$saver->save("/etc/a/hoge.txt", "test");
