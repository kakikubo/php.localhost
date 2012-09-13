<?php
// FIXME invokeのメリットがよくわからない。fooを渡しているけど、これ何？
class MyFilter
{
    public function filter($params)
    {
        return $params * 2;
    }

    public function __invoke($params)
    {
        return $this->filter($params);
    }
}
$filter = new MyFilter();
$filter('foo'); // 内部でfilter()メソッドを実行
var_dump(array_map($filter, array(1,2,3)));

