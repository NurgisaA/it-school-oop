<?php

namespace Itschool\Lesson4\Example2;

abstract class Animal {
    private string $name;


    abstract protected function makeSound():string;
//    public function makeSound() {
//        echo "The animal makes a sound.\n";
//    }

    public function setName(string $name): Animal
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }


}
