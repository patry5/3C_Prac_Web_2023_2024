<?php
function bisekcja()
{
$funkcja=0;
$poczatek=0;
$koniec=10;
$dokladnosc=1;
$start = $poczatek;
$end = $koniec;
while (($end - $start) >= $dokladnosc) 
{
$srodek = ($start + $end) / 2;
if($funkcja($srodek) == 0.0 || abs($end - $start) < $dokladnosc) 
{
return $srodek;
}
if($funkcja($srodek) * $funkcja($start) < 0) 
{
$end = $srodek;
}else 
{
$start = $srodek;
}
}
return($start + $end)/ 2;
}

$wynik = bisekcja("funkcja", -2, 2, 0.0001);
echo "Wartość miejsca zerowego: " . $wynik;
?>
