<?php
$age = 17;
if( $age < 11){
    echo" dziecko";
}
if($age >=11 && $age < 17 ){
    echo"nastolatek";
}
if($age >= 17){
    echo"dorosły";
}
?>

<?php
$age = 17;
switch(true){
case( $age < 11):
    echo" dziecko";
break;

case($age >=11 && $age < 17 ):
    echo"nastolatek";
break;
default:
    echo"dorosły";
    break;
}
?>