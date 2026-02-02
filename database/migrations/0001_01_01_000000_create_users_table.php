<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id(); // Это твой INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
        $table->string('username', 50)->nullable()->unique();
        $table->string('email', 100)->unique();
        $table->string('password'); // Laravel сам назовет поле для хэша пароля
        $table->enum('role', ['admin', 'manager', 'user'])->default('user');
        $table->timestamps(); // Это создаст created_at и updated_at автоматически
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
