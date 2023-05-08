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

            $table->id();

            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->string('titulo', 220)->nullable();
            $table->string('especialidade', 50)->nullable();
            $table->date('data')->nullable();
            $table->string('instituicao', 50)->nullable();
            $table->string('cidade',50)->nullable();
            $table->string('uf')->nullable();
            // //$table->string('nomeArquivo');

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
