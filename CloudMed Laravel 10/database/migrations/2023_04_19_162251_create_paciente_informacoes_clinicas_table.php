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
        Schema::create('pacienteInformacoesClinicas', function (Blueprint $table) {

            $table->id('idInformacoesClinicas');
            $table->unsignedBigInteger('idPaciente');

            $table->string('altura');
            $table->string('peso');
            $table->string('tipoSanguinio');
            $table->string('alergias');
            $table->string('medicamentosUsoContinuo');

            $table->foreign('idPaciente')->references('id')->on('userPacientes')->onDelete('cascade');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacienteInformacoesClinicas');
    }
};
