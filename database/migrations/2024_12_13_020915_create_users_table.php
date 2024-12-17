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
            $table->id('user_id'); // Esto crea un unsignedBigInteger automáticamente.
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('country')->nullable();
            $table->string('passport_or_id_type')->nullable();
            $table->string('passport_or_id_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('meals')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
