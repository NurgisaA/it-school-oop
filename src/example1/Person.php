<?php
namespace Itschool\Lesson4\Example1;
class Person
{
    public string $name;

    public function sayHello()
    {
        echo "Hello, " . $this->name;
    }


}