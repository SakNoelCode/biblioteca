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
        Schema::create('bibliografias', function (Blueprint $table) {
            $table->id();
            $table->char('ISBN')->nullable();
            $table->string('nombre');
            $table->string('editorial');
            $table->string('edicion');
            $table->integer('cantidad')->default(0);
            $table->text('descripcion')->nullable();
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliografias');
    }
};
