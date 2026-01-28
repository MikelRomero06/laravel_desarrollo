<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{

    protected $fillable = ['nombre_docente', 'facultad', 'area_experiencia', 'nivel_academico', 'correo'];
}
