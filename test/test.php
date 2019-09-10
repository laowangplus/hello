<?php
/**
 * Created by PhpStorm.
 * User: 老王专用
 * Date: 2019/9/10
 * Time: 19:57
 */
require '../vendor/autoload.php';

use laowang\Hello;

class test
{
    public static function say_hello(){
        Hello::hello();
    }
}

test::say_hello();