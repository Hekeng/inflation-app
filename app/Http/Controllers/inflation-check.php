<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inflation-check extends Controller
{
    public function index()
    {
        define("BASE_CURRENCY", "php artisan serve");
        $newCountries = [
            "Ukraine" => [
                "rate" => 1.2,
                "currency" => "UAH",
                "year" => 1995
            ],
            "USA" => [
                "rate" => 2.2,
                "currency" => "USD",
                "year" => 2000
            ],
            "Canada" => [
                "rate" => 2,
                "currency" => "USD",
                "year" => 2010
            ],
            "Germany" => [
                "rate" => 0.5,
                "currency" => "Euro",
                "year" => 2020
            ]
        ];


        $color = [];
        foreach ($newCountries as $country => $value) {
            if ($country !== "USA" && $value['rate'] > 1) {
                $color[] = 'red';
            } else {
                $color []= 'green';
            };
        }

        dump($color);
            return view('welcome', ['result' => $color, 'countries' => $newCountries]);
    }
}
