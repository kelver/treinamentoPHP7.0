<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

echo "Int :\n\n";
echo "\n3 <=> 3 // 0 :\n";
echo 3 <=> 3; // 0
echo "\n2 <=> 3 // -1 :\n";
echo 2 <=> 3; // -1
echo "\n3 <=> 2 // 1 :\n";
echo 3 <=> 1; // 1

echo "\n\n\n Float :\n\n";
echo "\n3.4 <=> 3.4 // 0 :\n";
echo 3.4 <=> 3.4; // 0

echo "\n\n\n String :\n\n";
echo "\n'a' <=> 'b' // -1 :\n";
echo "a" <=> "b"; // -1

echo "\n\n\n Array :\n\n";
echo "\n[1,2,3] <=> [1,1] // 1 :\n";
echo [1,2,3] <=> [1,1]; // 1
echo "\n[1,2,3] <=> [1,2,4] // -1 :\n";
echo [1,2,3] <=> [1,2,4]; // -1
echo "\n[1,2,3] <=> [1,1,4] // -1 :\n";
echo [1,2,3] <=> [1,1,4]; // -1


function intCompare1(int $a, int $b):int{
    //sem spaceship
    return ($a < $b ? -1 : (($a > $b) ? 1 : 0));
}

function intCompare2(int $a, int $b):int{
    //com spaceship
    return $a <=> $b;
}

echo "intCompare1: \n";
echo intCompare1(2,2);
echo "\n\nintCompare2: \n";
echo intCompare2(2,2);