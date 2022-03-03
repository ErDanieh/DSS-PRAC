<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musculo extends Model
{
    use HasFactory;

    protected $table = 'musculos';
    
    protected $primaryKey = 'id';

    protected $id_grupo_muscular;

    protected string $name;

    public $timestamps = false;

    public function grupoMuscular()
    {
        return $this->belongsTo(GrupoMuscular::class);
    }

}
