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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 100)->unique();

            $table->unsignedBigInteger('idInformacoesClinicas');
            $table->unsignedBigInteger('idCartaoSUS');
            $table->unsignedBigInteger('idCartaoConvenio');

            $table->string('sobrenome');
            $table->date('dataNascimento');
            $table->string('rg');
            $table->string('cpf');
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone');

            $table->foreign('idInformacoesClinicas')->references('id')->on('pacienteInformacoesClinicas')->onDelete('cascade');
            $table->foreign('idCartaoSUS')->references('id')->on('cartaoSus')->onDelete('cascade');
            $table->foreign('idCartaoConvenio')->references('id')->on('cartoesConvenio')->onDelete('cascade');



            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
