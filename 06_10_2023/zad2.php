<?php
$number1 = 5;
$number2 = 10;
if($number1 % $number2 == 0 ){
echo"pierwsza jest podzielna";
}
else
echo"pierwsza nie jest podzielna";
?>
<?php

switch($number1 % $number2){
    case 0:
        echo" jest podzielna";
        break;
        default:
        echo" nie jest podzielna";
        break;
}
?>