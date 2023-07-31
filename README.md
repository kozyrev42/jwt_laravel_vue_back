Запуск сервера: 
php -S localhost:8000 -t public
C:\OSPanel\modules\php\PHP_8.0\php.exe -S localhost:8000 -t public

Команды которые выполнялись:

1. Установка laravel
composer create-project laravel/laravel jwt_laravel_vue_back 8.*

2. Создал базу данных "step3_1_jwt", подключился, накатил миграции

3. Сделал тестовый роут, для проверки фронтового "axios"

4. Сделал Регистарцию пользователя

5. Командой сгенерировал модел Fruit, и миграцию для таблицы "fruits":
php artisan make:model Fruit -m

накатил миграцию:
php artisan migrate
