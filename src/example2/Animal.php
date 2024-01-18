<?php

namespace Itschool\Lesson4\Example2;

class Animal {
    public string $name;

    public function makeSound() {
        echo "The animal makes a sound.";
    }

    public function gatName()
    {
        return $this->name;
    }


}
