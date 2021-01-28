<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "apprentice.php";

$teacher1=new Teacher('Rose','12345678A',10);//using __construct from Person
$student1=new Student('Pauline','98765432S');//using __construct from Person
$student1->setStudyField('ASIX');
$Apprentice1=new Apprentice('Antoni','12345678T');//using __construct from Person
$Apprentice1->setFCTBusinessName('IESManacor');

echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $Apprentice1->print();
 ?>
</body>
</html>
