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
        Schema::create('vacinas', function (Blueprint $table) {

            // $table->id('idVacina');
            // $table->unsignedBigInteger('idPaciente');
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('tipoDose')->nullable();
            $table->date('data')->nullable();
            $table->string('fabricante')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();

            //$table->foreign('idPaciente')->references('id')->on('userPaciente')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacinas');
    }
};
