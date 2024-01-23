<?php

namespace Itschool\Lesson4\Example2;

use Itschool\Lesson4\Example2\Animal;
class Cat extends Animal {

    public function makeSound() {
        $name = $this->getName();
        echo "Cat says <$name>: Meow!\n";
    }
}