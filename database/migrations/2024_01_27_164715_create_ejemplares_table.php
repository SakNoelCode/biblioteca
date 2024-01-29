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
            $table->char('estado')->default('disponible');
            $table->char('ISBN')->nullable();
            $table->string('nombre');
            $table->string('editorial');
            $table->string('edicion');
            $table->string('autor');
            $table->integer('cantidad')->default(0);
            $table->text('descripcion')->nullable();
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('subcategoria_id')->constrained('subcategorias')->cascadeOnDelete();
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
