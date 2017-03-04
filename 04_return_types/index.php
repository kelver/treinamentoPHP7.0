<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */
// php 7
/*
 * int
 * string
 * float
 * bool
*/

declare(strict_types=1); // declarando para trabalhar em modo rígido, não permitindo tipos diferentes do declarado.

function funcA(int $x):int
{
    return $x/2;
    //return $x . "\n";// retorna um erro devido ao strict_types, se for removido, o php trata o retorno de acordo com o pedido.
}

//echo funcA("Teste"); // retorna um erro
//echo funcA(7);// prestar atenção em casos como esse, pois o retorno seria um float.
//echo funcA(2);// assim funciona

class ClassA
{
    public  function getInt(int $x):float
    {
        return $x/2;
    }
}

$a = new ClassA;
echo $a->getInt(7);