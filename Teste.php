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

  public function getSafadeza() {
    $safadeza = round(array_sum(range(1, $this->mes)) + ($this->ano / 100) * (50 - $this->dia));
    $anjo = 100 - $safadeza;

    return array('safado'=>$safadeza, 'anjo'=>$anjo);
  }
}


class SafadometroTest extends PHPUnit_Framework_TestCase
{
  public $safadometro;

  public function setup(){
    $this->safadometro = new Safadometro(1, 1, 1);
  }

    /**
    * @Test
    */
    public function teste_02_98()
    {
        $porcentagem = $this->safadometro(1,1,3);
        $this->assertEquals(2, $porcentagem['safado']);
        $this->assertEquals(98, $porcentagem['anjo']);
    }

    /**
    * @Test
    */
    public function teste_01_99()
    {
        $porcentagem = $this->safadometro(1,1,1);
        $this->assertEquals(1, $porcentagem['safado']);
        $this->assertEquals(99, $porcentagem['anjo']);
    }

    /**
    * @Test
    */
    public function teste_02_98_classe()
    {
      $safadometro = new Safadometro(1, 1, 3);
      $porcentagem = $safadometro->getSafadeza();
      $this->assertEquals(2, $porcentagem['safado']);
      $this->assertEquals(98, $porcentagem['anjo']);
    }

    /**
    * @Test
    */
    public function teste_01_99_classe()
    {
      $safadometro = new Safadometro(1, 1, 1);
      $porcentagem = $safadometro->getSafadeza();
      $this->assertEquals(1, $porcentagem['safado']);
      $this->assertEquals(99, $porcentagem['anjo']);
    }

    public function testSafadometroSomatorio(){
      $safadometro = new Safadometro(12, 12, 85);

      $this->assertEquals(1, $safadometro->somatorio(1));

    }

    public function safadometro($dia, $mes, $ano){
      $safadeza = round(array_sum(range(1, $mes)) + ($ano / 100) * (50 - $dia));
      //echo $safadeza;
      $anjo = 100 - $safadeza;
      return array('safado'=>$safadeza, 'anjo'=>$anjo);
      //return array('safado'=>90, 'anjo'=>10);
    }

}
