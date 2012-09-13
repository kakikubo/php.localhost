<?php
// Iteratorインターフェースを実装してforeachが使えるようになる例
class MyIterator implements Iterator
{
    private $values = array();

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function rewind()
    {
        reset($this->values);
    }
    
    public function current()
    {
        return current($this->values);
    }

    public function key()
    {
        return key($this->values);
    }

    public function next()
    {
        return next($this->values);
    }

    public function valid()
    {
        return ($this->current() !== false);
    }

}

$values = array(1,2,3);
$iterator = new MyIterator($values);

foreach ($iterator as $key => $value){
    echo "{$key}: {$value}\n";
}
