<?php
require_once 'vendor/autoload.php';

use WebTier\Classes1\FooBar;
use WebTier\Classes\Foo;
use WebTier\Classes1\Test;

//require_once 'app/Classes/FooBar.php';


$foobar = new FooBar();
echo $foobar->foo;

// $foo = new Foo();
// echo $foo->foos;

$test = new Test();
echo $test->foo;