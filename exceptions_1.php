<?php
// sense excepcions
/*function discountCalculation($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
  if($percentage!=0){
  $discountCalculation=($price * $discount)/$percentage;
    return $price - $discountCalculation;
  }
  return "value has to be greater than 0";
}

echo discountCalculation(10,0,50);*/

//amb excepcions
function discountCalculation($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
  if($percentage==0)
    throw new Exception("Divisió per 0.");
  else {
      $discountCalculation=($price * $discount)/$percentage;
      return $price - $discountCalculation;
  }
}
// excepció
try {
  echo discountCalculation(10,0,50);
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}
?>
