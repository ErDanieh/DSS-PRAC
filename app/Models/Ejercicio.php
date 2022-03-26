<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $table = 'ejercicios';

    public $timestamps = false;

    public function grupoMusculares()
    {
        return $this->belongsToMany('App\Models\GrupoMuscular');
    }

    public function entrenamientos()
    {
        return $this->belongsToMany('App\Models\Entrenamiento');
    }

}