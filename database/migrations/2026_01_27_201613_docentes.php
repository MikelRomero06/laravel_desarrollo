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
        Schema::create('Docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_docente');
            $table->string('facultad');
            $table->string('area_experiencia');
            $table->string('nivel_academico');
            $table->integer('correo')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
