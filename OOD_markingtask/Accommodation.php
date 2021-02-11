<?php
define('MENJADOR', array('casa','a la carta','buffet','no'));

class Accommodation
{
public $numHabit;
private $menjador;

public function setnumHabit($numHabit){
  $this->numHabit=$numHabit;
}
public function setmenjador($menjador){
  $this->menjador=$menjador;
}

public function getnumHabit(){
  return $this->numHabit;
}
public function getmenjador(){
  return $this->menjador;
}

public function setcheckIn($numHabit){
  $this->numHabit=--$this->$numHabit;
}
public function setcheckOut($numHabit){
  $this->numHabit=++$this->$numHabit;
}

public function __construct($numHabit, $menjador){
  echo $this->getnumHabit();
  echo $this->getmenjador();
}
}
?>
