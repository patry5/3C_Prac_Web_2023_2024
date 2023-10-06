<?php
$year = 2024;
if (($year % 4 == 0 && $year %100 !=0) || ($year % 400 ==0)){
    echo"Rok jest przestępny luty ma 29 dni";
}else{
    echo"Rok jest nie przestępny luty ma 28 dni";
}
?>

<?php
$year = 2024;
switch(true){
case (($year % 4 == 0 && $year %100 !=0) || ($year % 400 ==0)):
    echo"Rok jest przestępny luty ma 29 dni";
    break;
    default:
    echo"Rok jest nie przestępny luty ma 28 dni";
}
?>