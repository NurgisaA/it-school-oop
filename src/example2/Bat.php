<?php

namespace Itschool\Lesson4\Example2;

class Bat {
    use CanFly;
    public function makeSound() {
        echo "Screech!";
    }
}