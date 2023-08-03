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

6. Сделал роут получения фруктов, и контроллер получения фруктов

7. Чтобы создать ресурсный контроллер FruitResource, нужно выполнить команду:
php artisan make:resource FruitResource

8. Установка пакета jwt-auth:
composer require tymon/jwt-auth

*) config/jwt.php, который позволяет настроить основные параметры этого пакета:
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"

*) Сгенерировать секретный ключ:
php artisan jwt:secret

*) Ключ, который будет использоваться для подписи ваших токенов:
.env => JWT_SECRET=foobar

*) Настроить модель User

*) Настроить защиту авторизации в "config/auth.php"

*) Добавил несколько основных маршрутов аутентификации в "routes/api.php"

*) Создание AuthController, заполнение его нужными методами из доки
php artisan make:controller AuthController

*) теперь если на api/auth/login отправить email и пароль, система вернёт токен

*) в "config/jwt.php" на 104 строке, указывается время жизни токена в минутах

9. Чтобы получить ошибку, о том что токен сгорел "Token has expired", нужно указать для группы защищенных роутов
   'middleware' => 'jwt.auth' 

*) в AuthController добавил 'refresh', что бы его можно было вызвать, и получить новый токен

10. При регистрации, возвращаем на фронт 'access_token', чтобы на фронте юзера, СРАЗУ АУТЕНТИФИЦИРОВАТЬ

11. Поправил сообщение: 'Неверный логин или пароль'. Увеличил время жизни токена.
