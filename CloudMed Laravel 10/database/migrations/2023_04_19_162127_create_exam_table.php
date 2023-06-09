<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam', function (Blueprint $table) {

            $table->id();

            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->integer('id_uf')->unsigned()->nullable();
            $table->foreign('id_uf')->references('id')->on('uf')->onDelete('cascade');

            $table->integer('id_medical_specialty')->unsigned()->nullable();
            $table->foreign('id_medical_specialty')->references('id')->on('medical_specialty')->onDelete('cascade');

            $table->string('exam_title')->nullable();
            $table->date('exam_date')->nullable();
            $table->string('institution')->nullable();
            $table->string('city')->nullable();

            $table->string('file_exam_name')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam');
    }
};