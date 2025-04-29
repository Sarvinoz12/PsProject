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

            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // foydalanuvchi
            $table->foreignId('service_id')->nullable()->constrained('services')->cascadeOnDelete();
            $table->foreignId('psixolog_id')->nullable()->constrained('users')->cascadeOnDelete(); // psixolog ham users jadvalidan

            $table->string('name');     // foydalanuvchi ismi (yoki alohida kiritilsa)
            $table->string('phone');    // telefon raqam
            $table->text('message')->nullable(); // izoh
            $table->string('status')->default('kutilmoqda'); // holat

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
