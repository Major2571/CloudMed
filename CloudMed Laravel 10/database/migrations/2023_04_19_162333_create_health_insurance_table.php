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
        Schema::create('health_insurance', function (Blueprint $table) {
            $table->id('id');
            $table->integer('id_user')->index();
            $table->string('insurance_number')->nullable();
            $table->string('insurance_name')->nullable();
            $table->string('insurance_plan')->nullable();
            $table->string('file_insurance_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_insurance');
    }
};
