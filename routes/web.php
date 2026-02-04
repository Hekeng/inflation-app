<?php

use Illuminate\Support\Facades\Route;



use Illuminate\Support\Facades\DB; // Это единственный "инструмент" Laravel, который мы возьмем

Route::get('/db-test', function () {
    // 1. Пытаемся получить "сырое" соединение с базой
    $pdo = DB::connection()->getPdo();

    // 2. Пишем чистый SQL запрос (как в консоли MySQL)
    $sql = "SELECT * FROM users LIMIT 1";

    // 3. Выполняем запрос через PHP
    $statement = $pdo->query($sql);
    $user = $statement->fetch(PDO::FETCH_ASSOC); // Превращаем результат в обычный массив

    // 4. Выводим результат на экран (чистый PHP)
    echo "<pre>";
    print_r($user);
    echo "</pre>";
});

Route::get('/oop-test', function () {
    // Создаем простого "пустого" робота (объект)
    $myUser = new \stdClass();
    $myUser->name = "Hexen";
    $myUser->status = "Learning";

    // Выведи его через стрелочку
    return "Имя пользователя: " . $myUser->name . ", Статус: " . $myUser->status;
});
