<?php

namespace App\Services;

class MyCustomService
{
    /**
     * Складывает два числа и возвращает результат.
     *
     * @param  float|int  $number1 Первое число для сложения.
     * @param  float|int  $number2 Второе число для сложения.
     * @return float|int Результат сложения.
     */
    public function sumNumbers($number1, $number2)
    {
        return $number1 + $number2;
    }
}
