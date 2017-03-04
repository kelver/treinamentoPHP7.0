<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

interface MyPackageThrowable extends Throwable
{

}

class MyPackageException extends Exception implements MyPackageThrowable
{

}

/* ou
class MyPackageException extends Error implements MyPackageThrowable
{

}
*/

function add(int $left, int $right){
    if($left < 0){
        throw new MyPackageException("Left < 0");
    }
    return $left + $right;
}

try{
    echo add(-1, 5);
}catch (Exception $e){
    echo "Exception: ".$e->getMessage()."\n";
}catch (Error $e){
    echo "Error: ".$e->getMessage()."\n";
}