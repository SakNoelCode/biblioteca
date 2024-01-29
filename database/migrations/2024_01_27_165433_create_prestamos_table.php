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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prestamista_id')->constrained('prestamistas')->onDelete('cascade');
            $table->foreignId('ejemplare_id')->constrained('ejemplares')->onDelete('cascade');
            $table->dateTime('fecha_hora_prestamo');
            $table->dateTime('fecha_hora_devolucion')->nullable();
            $table->date('fecha_max_devolucion');
            $table->char('estado')->default('activo');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
