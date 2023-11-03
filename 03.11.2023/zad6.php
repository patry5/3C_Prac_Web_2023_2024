<?php
$sideA = 65;
$sideB = 1;
$sideC = 65;
if($sideC^2 == $sideB^2 + $sideA^2)
echo"jest prostokątny";
if($sideC^2 < $sideB^2 + $sideA^2)
echo"jest ostrokatny";
if($sideC^2 > $sideB^2 + $sideA^2)
echo"jest rozwartokatny";
if($sideA<=0|| $sideB<=0 || $sideC<=0){
    echo "Boki maja zle dlugosci";
}
?>