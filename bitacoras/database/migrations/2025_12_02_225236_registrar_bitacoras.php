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
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id(); 
            $table->string('bitacora', 30);
            $table->string('nombre_visitante', 150); 
            $table->string('compania', 60)->nullable();
            $table->string('contacto_denso', 150)->nullable();
            $table->string('grupo_fisico', 60)->nullable();
            $table->dateTime('entrada')->nullable();
            $table->dateTime('salida');
            $table->string('detalle', 60)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacoras');
    }
};
