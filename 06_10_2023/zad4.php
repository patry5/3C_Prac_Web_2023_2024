<?php
$number = 0;

if($number > 0){
echo"liczba jest wieksza od 0";
}
if($number == 0 ){
    echo"liczba jest równa 0";
}
else
echo"liczba jest mniejsza od 0";
?>
<?php
$number = 0;
switch(true){
case ($number > 0):
echo"liczba jest wieksza od 0";
break;
case($number == 0 ):
    echo"liczba jest równa 0";
break;
default:
echo"liczba jest mniejsza od 0";
break;
}
?>