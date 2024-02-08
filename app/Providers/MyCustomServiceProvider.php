<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyCustomService;

class MyCustomServiceProvider extends ServiceProvider
{
    /**
     * Регистрация сервисов.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MyCustomService::class, function ($app) {
            return new MyCustomService();
        });
    }

    /**
     * Загрузка предоставляемых сервисов.
     *
     * @return void
     */
    public function boot()
    {
        // Здесь можно добавить дополнительную логику загрузки,
        // например, публикацию конфигураций, миграций, представлений и т.д.
    }
}
