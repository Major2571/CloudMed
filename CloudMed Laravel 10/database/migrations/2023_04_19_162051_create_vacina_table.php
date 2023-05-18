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
        Schema::create('vacinas', function (Blueprint $table) {

            $table->id();

            $table->integer('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');

            $table->integer('id_vacina')->unsigned()->nullable();
            $table->foreign('id_vacina')->references('id')->on('tipos-vacinas')->onDelete('cascade');

            $table->integer('id_uf')->unsigned()->nullable();
            $table->foreign('id_uf')->references('id')->on('uf')->onDelete('cascade');

            $table->string('titulo')->nullable();
            $table->string('tipoDose')->nullable();
            $table->date('data')->nullable();
            $table->string('fabricante')->nullable();
            $table->string('lote')->nullable();
            $table->string('cidade')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacinas');
    }
};
