<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoMuscularEjercicio extends Model
{
    use HasFactory;


    private string $descripcion;


    public function musculos()
    {
       return $this->hasMany('App\Models\GrupoMuscularEjercicio');
    }
}
