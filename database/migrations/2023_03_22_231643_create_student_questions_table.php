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
        Schema::create('student_questions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('questions_id')->references('id')->on('questions')->cascadeOnDelete();
            $table->foreignId('student_tests_id')->references('id')->on('student_tests')->cascadeOnDelete();
            $table->integer('score')->default(0);
            $table->integer('is_exam_ques')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_questions');
    }
};
