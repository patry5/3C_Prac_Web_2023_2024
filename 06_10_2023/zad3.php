<?php
$number = 160;
if ($number >=100 && $number < 150){
echo"Liczba  mieści sie w przedziale";
}
else 
echo"nie mieści sie w przedziale";
?>


<?php
$number = 160;
switch(true){
case($number >=100 && $number < 150):
echo"Liczba  mieści sie w przedziale";
break;
default:
echo"nie mieści sie w przedziale";
break;
}
?>