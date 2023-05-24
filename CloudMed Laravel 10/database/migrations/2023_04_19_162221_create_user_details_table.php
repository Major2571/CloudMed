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

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_informacoes_clinicas');
            $table->foreign('id_informacoes_clinicas')->references('id')->on('pacienteInformacoesClinicas')->onDelete('cascade');

            $table->unsignedBigInteger('id_cartao_sus');
            $table->foreign('id_cartao_sus')->references('id')->on('cartaoSus')->onDelete('cascade');

            $table->unsignedBigInteger('id_cartao_convenio');
            $table->foreign('id_cartao_convenio')->references('id')->on('cartoesConvenio')->onDelete('cascade');

            $table->integer('id_uf')->unsigned()->nullable();
            $table->foreign('id_uf')->references('id')->on('uf')->onDelete('cascade');

            $table->string('sobrenome');
            $table->date('dataNascimento');
            $table->string('rg');
            $table->string('cpf');
            $table->string('cidade');
            $table->string('email');
            $table->string('telefone');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userPacientes');
    }
};
