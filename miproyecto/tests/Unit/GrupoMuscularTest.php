<?php

namespace Tests\Unit;

use App\Models\GrupoMuscular;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;


class GrupoMuscularTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_Grupo_muscular_has_many_musculos()
    {
        $grupoMuscular = new GrupoMuscular;

        $this->assertInstanceOf(Collection::class, $grupoMuscular->musculos);
    }

    public function test_obtencion_datos()
    {
        $arrayEsperado = ["Pectorales", "Deltoides", "Espalda", "Glúteos", "Trapecios", "Abdominales", "Brazo", "Piernas"];
        $grupoMuscular = GrupoMuscular::pluck('name')->toArray();
        $this->assertEquals($arrayEsperado, $grupoMuscular);
    }
}
