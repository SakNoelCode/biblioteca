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
            $table->string('nombre');
            $table->string('autor');
            $table->string('editorial')->nullable();
            $table->string('edicion')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('tipo');
            $table->string('nombre_revista')->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->string('asesor')->nullable();
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
