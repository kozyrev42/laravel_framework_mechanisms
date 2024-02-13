<?php

namespace App\Services;

class MyMultiplicationService
{
    /**
     * Умножает два числа и возвращает результат.
     *
     * @param  float|int  $number1 Первое число для умножения.
     * @param  float|int  $number2 Второе число для умножения.
     * @return float|int Результат умножения.
     */
    public function multiplyNumbers($number1, $number2)
    {
        return $number1 * $number2;
    }
}
