<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

require_once "vendor/autoload.php";
/*
Antes do PHP 7

use App\ClassA;
use App\ClassB;
use App\ClassC as C;
*/

//Com PHP 7
use App\{
    ClassA,
    ClassB,
    ClassC as C
};

$a = new ClassA;
echo $a;
$b = new ClassB;
echo $b;
$c = new C;
echo $c;