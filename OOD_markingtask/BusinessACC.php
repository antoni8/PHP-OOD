<?php
class BusinessACC extends Accommodation
{

public const SALES = array('reunions', 'audio visuals', 'internet', 'no');

private $sales;

public function setsales($sales){
  $this->sales=$sales;
}

public function getsales($sales){
  return $this->sales;
}

public function __construct($numHabit, $menjador){
  echo parent::__construct();
}
public function setcheckIn($numHabit){
  if($numHabit==0)
    throw new Exception('check-in Error: Hotel complet. Operació no permesa<br>');
  else {
    $this->numHabit=--$this->$numHabit;
    echo "check-in successful<br>";
  }
}
}
?>
