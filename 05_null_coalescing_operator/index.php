<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 01:23
 */

//solução anterior
//$a = isset($_GET['a']) ? $_GET['a'] : "Null";

//solução com null coalescing
$a = $_GET['a'] ?? "Null";

echo $a;