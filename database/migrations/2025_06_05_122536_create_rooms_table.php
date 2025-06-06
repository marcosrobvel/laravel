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
        Schema::create('rooms', function (Blueprint $table) {
        $table->id();
        $table->json('photo');
        $table->integer('roomNumber');
        $table->string('roomType');
        $table->string('amenities');
        $table->decimal('price', 8, 2);
        $table->decimal('offer_price', 8, 2)->nullable();
        $table->enum('status', ['available', 'booked'])->default('available');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
