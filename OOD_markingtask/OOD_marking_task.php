<html>
<head>
<title>OOD_6: inheritance exercise</title>
</head>
<body>
<?php
require "Accommodation.php";//similar to include
require "RuralAcc.php";
require "BusinessACC.php";

$ruralacc=new RuralAcc(10,MENJADOR['0'],'true',INST_AIRE_LLUIRE['2']);
$businessacc=new BusinessACC(1, MENJADOR['1']);

// excepció
try {
  echo Accommodation::checkIn();
}
catch (Exception $e) {
    echo "S'ha capturat l'excepció: " . $e->getMessage() . "<br>";
}
 ?>
</body>
</html>
