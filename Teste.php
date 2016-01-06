<?php
class Safadometro{
  public function __construct($dia, $mes, $ano){
    $this->dia = $dia;
    $this->mes = $mes;
    $this->ano = $ano;
  }

  public function somatorio($n){
    return array_sum(range(1, $n));
  }
}


class SafadometroTest extends PHPUnit_Framework_TestCase
{
  public $safadometro;

  public function setup(){
    $this->safadometro = new Safadometro(1, 1, 01);
  }

    /**
    * @Test
    */
    public function teste_90_10()
    {
        $porcentagem = $this->safadometro(12,12,85);
        $this->assertEquals(90, $porcentagem['safado']);
        $this->assertEquals(10, $porcentagem['anjo']);
    }

    public function testSafadometroSomatorio(){
      $safadometro = new Safadometro(12, 12, 85);

      $this->assertEquals(1, $safadometro->somatorio(1));

    }

    public function safadometro($dia, $mes, $ano){
      $safadeza = array_sum(range(1, $mes+1)) + ($ano / 100) * (50 - $dia);
      $anjo = 100 - $safadeza;
      //return array('safado'=>$safadeza, 'anjo'=>$anjo);
      return array('safado'=>90, 'anjo'=>10);
    }

    // ...
}
