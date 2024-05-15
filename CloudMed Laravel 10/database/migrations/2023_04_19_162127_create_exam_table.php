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
            $table->integer('id_user')->index();;
            $table->integer('id_uf')->index();;
            $table->integer('id_medical_specialty')->index();;
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