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
        Schema::create('companions', function (Blueprint $table) {
            $table->id('companion_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            //$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->string('lastname');
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
        Schema::dropIfExists('companions');
    }
};
