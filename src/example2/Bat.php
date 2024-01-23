<?php

namespace Itschool\Lesson4\Example2;

class Bat extends Animal {
    use CanFly;

    public function makeSound() {
        echo "Screech!\n";
    }
}