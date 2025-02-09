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

            $table->foreignId('course_id')->references('id')->on('courses')->cascadeOnDelete();

            $table->string("name");
            $table->string("level")->nullable();

            $table->boolean("is_Exam")->default(false);
            $table->integer("exam_shared")->default(0);

            $table->string("exam_type")->nullable();
            $table->integer("exma_effect")->nullable();
            $table->date("exam_day")->nullable();
            $table->time("exam_hour")->nullable();
            $table->integer("exam_duration")->nullable();
            $table->integer("ques_number")->nullable();
            $table->boolean("falseCancleTrue")->nullable();


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
