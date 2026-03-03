<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Faculty;//importamos el modelo
use App\Models\cursos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Estudiante extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'facultad', 'correo', 'telefono'];

    public function profile(){
        return $this->hasOne(Profile::class);
    }


    public function faculty(){
       return $this->belongsTo(Faculty::class);
    }

    public function courses(){
        return $this->belongsToMany(cursos::class);
    }
}
