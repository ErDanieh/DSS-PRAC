<?php

namespace Tests\Unit;

use App\Models\Ejercicio;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class EjercicioTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_Ejercicio_has_many_Grupo_Muscular()
    {
        $ejercicio = new Ejercicio();

        $this->assertInstanceOf(Collection::class, $ejercicio->grupoMusculares);
    }

    public function test_Ejercicios_select()
    {
        {
            $arrayEsperado = [
              "Press de pecho plano con mancuerna."
            , "Press de pecho con mancuerna inclinado"
            , "Apertura de mancuernas"
            , "Cruces en polea alta"
            , "Cruces en polea baja"
            , "Extensión de cuadriceps "
            , "Curl Femoral"
            , "Elevación de gemelos en máquina"
            , "Abductor en máquina"
            , "Press Militar con mancuernas sentado"
            , "Elevaciones laterales"];
            $grupoMuscular = Ejercicio::pluck('name')->toArray();
            $this->assertEquals($arrayEsperado, $grupoMuscular);
        }
    }
}
