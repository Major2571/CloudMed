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

            $table->id('idVacina');
            $table->unsignedBigInteger('idPaciente');
            
            $table->string('nome');
            $table->string('tipoDose');
            $table->date('data');

            $table->string('fabricante');
            $table->string('cidade');
            $table->string('estado');
            $table->foreign('idPaciente')->references('id')->on('userPaciente')->onDelete('cascade');

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
