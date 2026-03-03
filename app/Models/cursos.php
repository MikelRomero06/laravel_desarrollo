<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiante;

class cursos extends Model
{

    protected $fillable = ['nombre_curso', 'codigo', 'detalles'];

    public function courses(){
        return $this->hasMany(Estudiante::class);
    }
}
