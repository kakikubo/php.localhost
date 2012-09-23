<?php
// ClassLoader.phpを利用するサンプル
// FIXME ここ、よくわかってないのでもう一度復習(p.454)
require './ClassLoader.php';

$loader = new ClassLoader(array(
    'Foo' => '/Users/kakikubo/Documents/php.localhost',
    ''    => '.',
));
$loader->register();

// new Foo\Bar();
new Foo\Bar\Baz();
//new Unknown\Baz();
new Hoge_Huga();
