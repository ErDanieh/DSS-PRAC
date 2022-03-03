<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $table = 'ejercicios';

    protected $primaryKey = 'id';

    protected string $name;

    protected string $descripcion;

    protected string $url_img;

    public $timestamps = false;

    public function grupoMusculares()
    {
        return $this->hasMany('App\Models\GrupoMuscular');
    }

}
