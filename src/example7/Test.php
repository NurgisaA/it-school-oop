<?php

namespace Itschool\Lesson4\Example7;

class Test
{
    public $prop1 = 1; // публичное свойство
    private $prop2 = 2; // приватное свойство


    public function __construct()
    {

    }

    public function __set(string $name, $value): void
    {
        $this->{$name} = $value;
    }

    public function __get(string $name)
    {

        return $this->{$name};
    }




}