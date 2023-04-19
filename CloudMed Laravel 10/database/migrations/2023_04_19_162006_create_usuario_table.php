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
        Schema::create('usuarios', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('idPaciente');
            $table->unsignedBigInteger('idExame');
            $table->unsignedBigInteger('idVacina');

            $table->string('login')->unique();
            $table->string('senha');

            $table->foreign('idPaciente')->references('id')->on('userPacientes')->onDelete('cascade');
            $table->foreign('idExame')->references('id')->on('exame')->onDelete('cascade');
            $table->foreign('idVacina')->references('id')->on('vacina')->onDelete('cascade');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
