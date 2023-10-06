<?php
$number1 = 10;
$number2 = 5;
$number3 = 8;
if($number1 <= $number2 && $number1 <= $number3){
    echo"najmniejsza jest liczba 1";
}
elseif ($number2 <=$number1 && $number2 <= $number3) {
    echo"najmniejsza jest liczba 2";
}else{
    echo" najmniejsza jest liczba3";
}
?>

<?php
$number1 = 10;
$number2 = 5;
$number3 = 8;

$lowestnumber = $number1;
switch(true){
case ($number1 <= $lowestnumber):
    $lowestnumber = $number2;
    break;

case($number3 < $lowestnumber):
    $lowestnumber = $number3;
break;
    echo"Najmniejsza jest $lowestnumber";
}
?>