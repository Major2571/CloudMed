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
        Schema::create('clinical_information', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_user')->index();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('is_donor')->nullable();
            $table->string('blood_type')->nullable();
            $table->text('allergies')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinical_information');
    }
};
