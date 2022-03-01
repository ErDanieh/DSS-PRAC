<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;

    public string $descripcion;

    public string $urlImg;

    public function grupoMuscular()
    {
        return $this->belongsTo('App\Models\GrupoMuscular');
    }
}
