<?php
$kategoria = "odziez";

$cena_elektronika = 1000;
$cena_odziez = 50;
$cena_pieczywo = 5;

$podatek_elektronika = 0.23;
$podatek_odziez = 0.08;
$podatek_pieczywo = 0.05;

switch ($kategoria) {
    case "elektronika":
        $cena_z_podatkiem = $cena_elektronika * (1 + $podatek_elektronika);
        echo "Cena elektroniki z podatkiem: " . $cena_z_podatkiem;
        break;
    case "odziez":
        $cena_z_podatkiem = $cena_odziez * (1 + $podatek_odziez);
        echo "Cena odzieży z podatkiem: " . $cena_z_podatkiem;
        break;
    case "pieczywo":
        $cena_z_podatkiem = $cena_pieczywo * (1 + $podatek_pieczywo);
        echo "Cena pieczywa z podatkiem: " . $cena_z_podatkiem;
        break;
    default:
        echo "Nieznana kategoria produktu: " . $kategoria;
}
?>
