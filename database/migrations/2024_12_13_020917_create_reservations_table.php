<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tour_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            //$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreign('tour_id')->references('tour_id')->on('tours')->onDelete('cascade');
            //$table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->timestamp('reservation_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('total_cost', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
