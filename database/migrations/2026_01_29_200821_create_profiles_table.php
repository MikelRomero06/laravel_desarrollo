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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->date('birth_date');

            //crear relacion con tabla de estudiantes
            //columna en la tabla de profiles en la BD
            $table->foreignId('estudiante_id')->unique();

            //relacion - clave foraneas
            $table->foreign('estudiante_id')->references('id')->on('Estudiantes');
            //NOTA: EL ORDEN DE CREACION DE LAS TABLAS EN LAS MIGRACIONES SI IMPORTA.
            //TABLAS PADRES A LAS HIJAS QUE NO TIENEN LLAVES FORANEAS.
            //TABLAS HIJAS SON LAS QUE SI TIENEN DEPENDENCIA.



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
