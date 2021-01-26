<HTML>
<head>
<title>OOD_4</title>
</head>
<body>
<?php
class CurrencyConverter
{
  //properties
var $euros;
var $exchangeRate;
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

public function getExchangeRate()
{
return $this->exchangeRate;
}

public function getPounds()
{
return $this->pounds;
}

public function convertEurostoPounds(){
  $this->pounds = ($this->euros*$this->exchangeRate);
  return $this->pounds;
}

  function __construct($euros, $exchangeRate){
    $this->euros = $euros;
    $this->exchangeRate = $exchangeRate;
}

public function print()
{
echo "Euros: ".$this->getEuros() ." <br>";
echo "Exchange rate: ".$this->getExchangeRate() ."<br>";
echo "Pounds: " . $this->getPounds(). "<br><br>";
}
}//end class Student

$euros=2;
$exchangeRate=0.89;

$currencyConverter=new CurrencyConverter($euros,$exchangeRate);//Creating object

if ($exchangeRate>0)
  $currencyConverter->convertEurostoPounds();
else {
  echo "The exchange rate has to be higher than 0.";
}
$currencyConverter->print();
?>
</body>
</html>
