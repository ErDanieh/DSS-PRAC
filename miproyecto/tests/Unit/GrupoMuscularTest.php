<?php

namespace Tests\Unit;

use App\Models\GrupoMuscular;
use Illuminate\Database\Eloquent\Collection;
use PHPUnit\Framework\TestCase;

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
}
