<?php
define('TIPUS_ACTIVITATS', array('senderisme','equitació','ciclisme'));

class RuralAcc extends Accommodation
{

public const INST_AIRE_LLUIRE = array('jardí', 'montanya', 'platja');

private $orgActivitats;
private $instAireLliure;

public function setorgActivitats($orgActivitats){
  $this->orgActivitats=$orgActivitats;
}
public function setinstAireLliure($instAireLliure){
  $this->instAireLliure=$instAireLliure;
}

public function getorgActivitats(){
  return $this->orgActivitats;
}
public function getinstAireLliure(){
  return $this->instAireLliure;
}

public function __construct($numHabit, $menjador, $orgActivitats, $instAireLliure){
  echo parent::__construct();
  echo $this->getorgActivitats();
  echo $this->getinstAireLliure();
}
}
?>
