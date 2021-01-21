<HTML>
<head>
<title>OOD_3</title>
</head>
<body>
<?php
class CurrencyConverter
{
  //properties
var $euros;
var $exchange_rate;
var $pounds;

//setters
public function setEuros($euros)
{
$this->euros=$euros;
}

public function setExchange_rate($exchange_rate)
{
$this->exchange_rate=$exchange_rate;
}

public function setPounds($pounds)
{
$this->pounds=$pounds;
}

//getters
public function getEuros()
{
return $this->euros;
}

public function getExchange_rate()
{
return $this->exchange_rate;
}

public function getPounds()
{
return $this->pounds;
}

  function __construct($euros, $exchange_rate, $pounds){
    $this->euros=$euros;
    $this->exchange_rate=$exchange_rate;
    $this->pounds=$pounds;
}

public function print()
{
echo "Euros: $this->euros <br>";
echo "Exchange rate: $this->exchange_rate <br>";
echo "Pounds: " . $this->getPounds(). "<br><br>";
}

}//end class Student

$convert=new CurrencyConverter(40, 0.89, 35);
$convert-> print();
echo "Euros: ". $convert->getEuros();
echo "<br>";
echo "Exchange rate: " . $convert->getExchange_rate();
echo "<br>";
echo "Pounds: " . $convert->getPounds();
echo "<br>";
?>
</body>
</html>
