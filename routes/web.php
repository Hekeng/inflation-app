<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CurrencyController;

           //  URL-путь        Класс контроллера      Метод (функция)
Route::get('/inflation-check', [CurrencyController::class, 'index']);

Route::get('/', [CurrencyController::class, 'index']);

Route::get('/country/{name}', [CurrencyController::class, 'showCountry']);


