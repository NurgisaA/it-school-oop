<?php

namespace Itschool\Lesson4\Example3;


use Itschool\Lesson4\Example1\Person;

class Student extends Person
{
    public string $university;

    public function study()
    {
        echo "$this->name учится в $this->university";
    }
}