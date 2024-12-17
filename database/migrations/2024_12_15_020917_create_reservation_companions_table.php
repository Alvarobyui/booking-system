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
        Schema::create('reservation_companions', function (Blueprint $table) {
            $table->id('reservation_companion_id');
            $table->unsignedBigInteger('reservation_id');
            $table->unsignedBigInteger('companion_id');
            $table->foreign('reservation_id')->references('reservation_id')->on('reservations')->onDelete('cascade');
            //$table->foreignId('reservation_id')->constrained('reservations')->onDelete('cascade');
            $table->foreign('companion_id')->references('companion_id')->on('companions')->onDelete('cascade');
            //$table->foreignId('companion_id')->constrained('companions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_companions');
    }
};
