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
        Schema::create('informacoes_clinicas', function (Blueprint $table) {

            $table->id('id');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->string('altura')->nullable();
            $table->string('doador')->nullable();
            $table->string('peso')->nullable();
            $table->string('tipoSanguineo')->nullable();
            $table->text('alergias')->nullable();
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informaçoes_clinicas');
    }
};
