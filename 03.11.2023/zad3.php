<?php

$kategoria = "odziez";

$cena_elektronika = 1000;
$cena_odziez = 50;
$cena_pieczywo = 5;

$podatek_elektronika = 0.23;
$podatek_odziez = 0.08; 
$podatek_pieczywo = 0.05; 
if ($kategoria == "elektronika") {
    $cena_z_podatkiem = $cena_elektronika * (1 + $podatek_elektronika);
    echo "Cena elektroniki z podatkiem: " . $cena_z_podatkiem;
} elseif ($kategoria == "odziez") {
    $cena_z_podatkiem = $cena_odziez * (1 + $podatek_odziez);
    echo "Cena odzieży z podatkiem: " . $cena_z_podatkiem;
} elseif ($kategoria == "pieczywo") {
    $cena_z_podatkiem = $cena_pieczywo * (1 + $podatek_pieczywo);
    echo "Cena pieczywa z podatkiem: " . $cena_z_podatkiem;
} else {
    echo "Nieznana kategoria produktu: " . $kategoria;
}
?>