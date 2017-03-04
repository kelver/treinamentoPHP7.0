<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

class ClassA
{
    private $x = 1;
}

// Recuperando valor método < PHP 7
$getABC = function (){
    return $this->x;
};

$getX = $getABC->bindTo(new ClassA, "ClassA");
echo $getX() . "\n\n";

//com php 7
$getX2 = function (){
    return $this->x;
};

echo $getX->call(new ClassA);