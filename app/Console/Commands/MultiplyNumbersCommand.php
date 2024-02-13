<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use MyMultiplicationService;

class MultiplyNumbersCommand extends Command
{
    /**
     * The name and signature of the console command.
     * 
     *  php artisan test:multiply 2 3
     * @var string
     */
    protected $signature = 'test:multiply {number1 : Первое число для умножения} {number2 : Второе число для умножения}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Умножает два числа с использованием MyMultiplicationService';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $number1 = $this->argument('number1');
        $number2 = $this->argument('number2');

        // Убедитесь, что ваши числа действительно числовые
        if (!is_numeric($number1) || !is_numeric($number2)) {
            $this->error('Оба аргумента должны быть числами.');
            return 1; // Возвращает статус ошибки
        }

        // Вызов метода умножения через фасад
        $result = MyMultiplicationService::multiplyNumbers($number1, $number2);

        // Вывод результата
        $this->info("Результат умножения: {$result}");

        return 0; // Возвращает успешный статус
    }
}
