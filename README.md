<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

`php -S 127.0.0.1:8000 -t public`

1. Установка проекта: `composer create-project --prefer-dist laravel/laravel laravel_framework_mechanisms`

2. Реализация/использование сервиса через сервис-провайдер.
- Написан Класс "MyCustomService" и метод "sumNumbers()".
- "MyCustomService" зарегистрирован в "MyCustomServiceProvider"
- "MyCustomServiceProvider" зарегистрирован в приложении Laravel в "config/app.php"
- написана консольная-команда, в которой вызываем метод через контейнер app();

3. Реализуем собственный Фасад для сервиса MyMultiplicationService
- Создан сервис MyMultiplicationService
- Регистрация сервиса MyMultiplicationService в MyMultiplicationServiceProvider  в контейнере служб Laravel.
- Регистрация сервис-провайдера в 'providers' в файле конфигурации config/app.php
- Создание класса фасада MyMultiplicationServiceFacade
- Регистрация псевдонима фасада в массиве aliases файла config/app.php
- Написана консольная команда для тестирования фасада.
