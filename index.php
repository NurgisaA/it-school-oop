<?php

use Itschool\Lesson4\Example7\Test;
use Itschool\Lesson4\example7\User;

require_once "./vendor/autoload.php";


$u = new User('name',  25);


$u->name = "Nurgisa";
$u->age = 123;

echo $u;

$u->age = -123;
echo $u;
