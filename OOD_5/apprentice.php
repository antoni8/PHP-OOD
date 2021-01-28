<?php
class Apprentice extends Student
{
private $FCTBusinessName;

public function setFCTBusinessName($FCTBusinessName)
{
  $this->FCTBusinessName=$FCTBusinessName;
}

public function getFCTBusinessName()
{
  return $this->FCTBusinessName;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo $this->getFCTBusinessName().'<hr>';
}
}
?>
