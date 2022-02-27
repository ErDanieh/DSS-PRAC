<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;


    private string $name;

    private string $descripcion;

    private string $urlImg;


    public function gruposMusculares()
    {
        return $this->hasMany('App\Models\GrupoMuscularEjercicio');
    }

}
