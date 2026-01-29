<?php

namespace App\Models;
use App\Models\Estudiante; //importando el modelo de estudiante
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;
    protected $fillable = ['address', 'birth_date'];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
}
