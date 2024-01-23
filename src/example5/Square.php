<?php

namespace Itschool\Lesson4\Example5;

class Square extends Shape
{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }


    public function calculateArea(): float
    {
        return $this->a * $this->b;
    }
}