<?php

namespace Itschool\Lesson4\example7;

class User
{
    private $name;
    private $age;

    private $filable = ['age'];

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get(string $prop_name)
    {
        return $this->{$prop_name};
    }

    public function __set(string $prop_name, $value): void
    {
        if (!in_array($prop_name, $this->filable)){
            return;
        }

        if ($prop_name == "age") {
            if ($value > 0 && $value < 100) {
                $this->{$prop_name} = $value;
            }
        }

    }

    public function __toString(): string
    {
        return "<User> Name: {$this->name} Age: {$this->age}";
    }


}