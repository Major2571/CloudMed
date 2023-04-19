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
        Schema::create('exames', function (Blueprint $table) {

            $table->id('idExame');
            $table->unsignedBigInteger('idPaciente');
            $table->unsignedBigInteger('idEspecialidade');

            $table->string('nome');
            $table->date('data');
            $table->string('instituicao');
            $table->string('cidade');
            $table->string('estado');
            $table->string('nomeArquivo');

            $table->foreign('idPaciente')->references('id')->on('userPaciente')->onDelete('cascade');
            $table->foreign('idEspecialidade')->references('id')->on('especialidades')->onDelete('cascade');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exames');
    }
};
