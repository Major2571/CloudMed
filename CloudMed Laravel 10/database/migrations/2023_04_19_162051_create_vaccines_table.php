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
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->index();
            $table->integer('id_vaccine')->index();
            $table->integer('id_uf')->index();
            $table->string('new_vaccine_name')->nullable();
            $table->string('doses')->nullable();
            $table->date('vaccination_date')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccines');
    }
};
