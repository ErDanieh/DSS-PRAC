<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;


    public string $descripcion;

    public string $url_img;


    public function gruposMuscularEjercicio()
    {
        return $this->belognsToMany('App\Models\GrupoMuscularEjercicio');
    }
}
