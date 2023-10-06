<?php
$number1 = 5;
$number2 = 8;
$number3 = 8;
if($number1 == $number2 || $number1 == $number3 || $number2 == $number3){
echo"Co najmniej dwie są takie same";
}else{
    echo" Zadne nie są takie same";
}
?>
<?php
$number1 = 5;
$number2 = 8;
$number3 = 8;
switch(true){
case($number1 == $number2 || $number1 == $number3 || $number2 == $number3):
echo"Co najmniej dwie są takie same";
break;
default:
    echo" Zadne nie są takie same";
    break;
}
?>