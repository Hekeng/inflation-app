<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    \App\Models\User::create([
        'username' => 'hexen',
        'email' => 'koydano@gmail.com',
        'password' => bcrypt('1111'), // Laravel сам захеширует
        'role' => 'admin',
    ]);
}
}
