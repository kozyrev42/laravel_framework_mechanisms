<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyMultiplicationService;

/**
 * 
 * Регистрация сервиса MyMultiplicationService.
 * 
 */
class MyMultiplicationServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(MyMultiplicationService::class, function ($app) {
            return new MyMultiplicationService();
        });
    }
}