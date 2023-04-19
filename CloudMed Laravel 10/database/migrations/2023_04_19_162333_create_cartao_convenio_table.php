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
        Schema::create('cartoesConvenio', function (Blueprint $table) {

            $table->id('idCartaoConvenio');
            $table->unsignedBigInteger('idPaciente');
            
            $table->string('numero');
            $table->string('nomeConvenio');
            $table->date('validade');

            $table->foreign('idPaciente')->references('id')->on('userPacientes')->onDelete('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartoesConvenio');
    }
};
