<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01_strict_types:05
 */

// Teste introdutório
declare(strict_types=1);

$php7 = function (String $title):array{
    return [
        $title . "\n",
        "PHP em outro Nível",
        "Mais performance",
        "2x mais rápido"
    ];
};

foreach ($php7("Novidades do PHP 7") as $p){
    echo $p . "\n";
}