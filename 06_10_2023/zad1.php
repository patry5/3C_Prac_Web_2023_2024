<?php
$number = 6;
if($number % 2 == 0)
echo"liczba jest parzysta";
else
echo"liczba jest nie parzysta";
?>
<?php
$number = 5;
switch($number % 2){
    case 0: 
echo"liczba jest parzysta";
break;
default:
echo"liczba jest nie parzysta";
break;
}
?>