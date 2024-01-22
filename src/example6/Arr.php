<?php

namespace Itschool\Lesson4\example6;

class Arr
{
    private $numbers = []; // массив чисел

    public function add($number)
    {
        $this->numbers[] = $number;
        return $this; // вернем ссылку сами на себя
    }

    public function push($numbers)
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this; // вернем ссылку сами на себя
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}