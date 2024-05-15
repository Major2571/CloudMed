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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->index();
            $table->integer('id_uf')->index();
            $table->string('last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
