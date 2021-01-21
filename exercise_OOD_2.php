<HTML>
<head>
<title>OOD_2</title>
</head>
<body>

<?php
class Student
{
var $name;
var $dni;
var $surname1;
var $surname2;
var $edad;

//setters
public function setName($nom)
{
$this->name=$nom;
}

public function setDni($dni)
{
$this->dni=$dni;
}

public function setSurname1($surname1)
{
$this->surname1=$surname1;
}

public function setSurname2($surname2)
{
$this->surname2=$surname2;
}

public function setAge($age)
{
$this->age=$age;
}

//getters
public function get_name()
{
return $this->name;
}

public function get_dni()
{
return $this->dni;
}

public function get_surname1()
{
return $this->surname1;
}

public function get_surname2()
{
return $this->surname2;
}

public function get_age()
{
return $this->age;
}

  function __construct($name, $surname1, $surname2, $dni, $age){
    $this->name=$name;
    $this->surname1=$surname1;
    $this->surname2=$surname2;
    $this->dni=$dni;
    $this->age=$age;
}

}//end class Student

$alumne1=new Student('Imena', 'Perez', 'Gonzalez', '23344556D', 23);
echo "Name: " . $alumne1->get_name();
echo "<br>";
echo "Surname1: " . $alumne1->get_surname1();
echo "<br>";
echo "Surname2: " . $alumne1->get_surname2();
echo "<br>";
echo "Dni: " . $alumne1->get_dni();
echo "<br>";
echo "Age: " . $alumne1->get_age();
echo "<br>";
?>
</body>
</HTML>
