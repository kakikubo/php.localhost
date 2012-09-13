<?php
// Fileクラスの定義(miniblogでは使わないけど、なんとなくここにおいてみた)
// FIXME p.423 あたり。このサンプルは何が言いたいのか、あまりよく分からなかった。
class File2 implements Serializable
{
    private $filename;
    private $mode;
    private $fp;

    public function __construst($filename, $mode)
    {
        $this->open($filename, $mode);
    }

    public function open($filename, $mode)
    {
        if (!is_readable($filename)){
            throw new RuntimeException('Cannot open file ' . $filename);
        }
        $this->filename = $filename;
        $this->mode = $mode;

        $this->fp = fopen($filename, $mode);
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function __sleep()
    {
        return array('filename', 'mode');
    }

    public function __wakeup()
    {
        $this->open($this->filename, $this->mode);
    }

    public function serialize()
    {
        return serialize(array(
            'filename' => $this->filename,
            'mode'     => $this->mode,
        ));
    }

    public function unserialize($serialized)
    {
        $data = unserialize($serialized);
        $this->open($data['filename'], $data['mode']);
    }
}

$file = new File2(__FILE__ , 'r');
$sf = serialize($file);
echo "var_dumpします\n";
var_dump($sf);
