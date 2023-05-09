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

            // $table->integer('id_user')->unsigned();
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->string('altura');
            $table->string('peso');
            $table->string('tipoSanguineo');
            $table->string('alergias');
            $table->string('medicamentosUsoContinuo');
            
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
