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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 255);
            $table->date('date');
            $table->string('customer', 100);
            $table->string('mail', 100);
            $table->string('phone', 30);
            $table->string('subject', 255);
            $table->text('comment');
            $table->enum('status', ['', 'archived'])->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
