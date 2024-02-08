<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\MyCustomService;

class TestMyCustomService extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     * 
     * php artisan test:mycustomservice 5 3
     * @var string
     */
    protected $signature = 'test:mycustomservice {number1} {number2}';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Тестирует метод sumNumbers() сервиса MyCustomService';

    /**
     * Выполняет консольную команду.
     *
     * @return int
     */
    public function handle()
    {
        $number1 = $this->argument('number1');
        $number2 = $this->argument('number2');

        // Получение экземпляра MyCustomService через сервис-контейнер app()
        $myCustomService = app(MyCustomService::class);

        $result = $myCustomService->sumNumbers($number1, $number2);

        $this->info("Результат сложения {$number1} и {$number2}: {$result}");

        return 0;
    }
}
