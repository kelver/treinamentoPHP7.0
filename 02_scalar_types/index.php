<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */
// php 5.0
class ClasseA
{

}

class ClasseB
{
    public function get(ClasseA $a)
    {

    }
}

// php 5.1


class ClasseC
{
    public function get(array $a)
    {

    }
}

// php 5.4


class ClasseD
{
    public function get(callable $a)
    {

    }
}

// php 7
/*
 * int
 * string
 * float
 * bool
*/

class ClasseE
{
    public function get(String $a)
    {
        return $a . "\n";
    }
}

$e = new ClasseE;
echo $e->get("Teste");
echo $e->get(1);// converte para o tipo enviado