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
        Schema::create('exam', function (Blueprint $table) {

            $table->id();

            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->integer('id_uf')->unsigned()->nullable();
            $table->foreign('id_uf')->references('id')->on('uf')->onDelete('cascade');

            $table->integer('id_especialidade')->unsigned()->nullable();
            $table->foreign('id_especialidade')->references('id')->on('especialidade')->onDelete('cascade');

            $table->string('titulo', 220)->nullable();
            $table->date('data')->nullable();
            $table->string('instituicao', 100)->nullable();
            $table->string('cidade', 100)->nullable();

           $table->string('nome_arquivo')->nullable();

            $table->timestamps();
                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam');
    }
};
