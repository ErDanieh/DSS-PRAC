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
}
