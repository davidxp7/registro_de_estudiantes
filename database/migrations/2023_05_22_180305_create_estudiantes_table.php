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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('nacionalidad');
            $table->string('identificacion_tipo');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('institucion_anterior')->nullable();
            $table->integer('carrera_id');
            $table->string('documento_identidad')->unique();
            $table->string('forma_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
