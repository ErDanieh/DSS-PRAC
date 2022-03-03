<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoMuscular extends Model
{
    use HasFactory;

    protected $table = 'grupo_musculars';

    protected $name;

    protected string $descripcion;

    public function musculos()
    {
        return $this->hasMany(Musculo::class);
    }
}
