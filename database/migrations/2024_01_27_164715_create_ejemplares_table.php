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
        Schema::create('ejemplares', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->nullable();
            $table->string('nombre');  //Título si es una Tesis o Separata
            $table->string('editorial')->nullable();
            $table->string('edicion')->nullable();
            $table->date('fecha_publicacion')->nullable();  //Fecha que se sustento si es una Tesis
            $table->string('autor')->nullable();
            $table->unsignedInteger('numero_paginas')->nullable();
            $table->unsignedInteger('cantidad');
            $table->text('descripcion')->nullable();
            $table->string('pais_ciudad')->nullable();
            $table->string('tipo'); //libro, tesis, revista, separata
            $table->foreignId('categoria_id')->nullable()->constrained('categorias')->onDelete('cascade');
            $table->foreignId('subcategoria_id')->nullable()->constrained('subcategorias')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplares');
    }
};
