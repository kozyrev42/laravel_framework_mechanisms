<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Services\MyMultiplicationService;

/**
 * @see \App\Services\MyMultiplicationService
 */
class MyMultiplicationServiceFacade extends Facade
{
    /**
     * Получить зарегистрированное имя компонента в контейнере.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return MyMultiplicationService::class;
    }
}
