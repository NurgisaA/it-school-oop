<?php

namespace Itschool\Lesson4\Example6;

class Arr
{
    private array $numbers = []; // массив чисел

    public function add(float $number)
    {
        $this->numbers[] = $number;
        return $this; // вернем ссылку сами на себя
    }

    public function push(array $numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this; // вернем ссылку сами на себя
    }

    public function getSum(): float
    {
        return array_sum($this->numbers);
    }
}