<?php


require "vendor/autoload.php";

use \Sign\Test;

$test_obj = new Test();
$test_obj->alert();
$calculator_obj = new Calculator();
echo $calculator_obj->plus(1, 9999); die;
