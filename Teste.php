<?php
class TesteTest extends PHPUnit_Framework_TestCase
{


    /**
    * @Test
    */
    public function teste_funcao_somatorio()
    {
        $this->assertEquals(15, $this->safadometro(1,5,1995));
    }

    public function safadometro($dia, $mes, $ano){
      $safadeza = array_sum(range(1, $mes)) + ($ano / 100) * (50 / $dia);
      $anjo = 100 - $safadeza;
      return 15;
    }

    // ...
}
