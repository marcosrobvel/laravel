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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
        $table->string('guest', 100);
        $table->date('orderDate');
        $table->date('checkIn');
        $table->date('checkOut');
        $table->text('special')->nullable();
        $table->enum('roomType', ['Single', 'Double', 'Suite', 'Single Bed', 'Double Bed', 'Deluxe Suite']);
        $table->integer('roomNumber');
        $table->enum('bookStatus', ['in', 'out', 'progress']);
        $table->json('photo');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
