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

function funcA(int $x)
{
    return $x . "\n";
}

//echo funcA("Teste"); // retorna um erro
echo funcA(2);