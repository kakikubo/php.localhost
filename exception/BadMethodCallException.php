<?php

class Delegator
{
    private $object;

    public function __construct($object)
    {
        if (!is_object($object)){
            throw new InvalidArgumentException('Argument must be an object');
        }

        $this->object = $object;
    }

    public function __call($method, $args)
    {
        if (!method_exists($this->object, $method)){
            throw new BadMethodCallException('Call to undefined method ' . $method);
        }
        return call_user_func_array(array($this->object, $method), $args);
    }
}

class Foo
{
    public function bar()
    {
        var_dump(__METHOD__);
    }
}

$delegator = new Delegator(new Foo());
$delegator->bar();
$delegator->unknown();
