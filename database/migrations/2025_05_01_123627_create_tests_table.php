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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('psixolog_id')->constrained('psixologs');
            $table->string('image')->nullable(); // test rasmi
            $table->text('question'); // savol
            $table->string('answer_a');
            $table->text('description_a')->nullable();
            $table->string('answer_b');
            $table->text('description_b')->nullable();
            $table->string('answer_c');
            $table->text('description_c')->nullable();
            $table->string('answer_d');
            $table->text('description_d')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
