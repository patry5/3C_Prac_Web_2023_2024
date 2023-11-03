<?php
$rok = 1901;
if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) {
    echo "Rok " . $rok . " jest przestępny.";
} else {
    echo "Rok " . $rok . " nie jest przestępny.";
    if($rok >0){
        echo"rok nie może byc ujemny";
    }
}
$Century = ceil($rok / 100);
echo"stulecje". $Century;
?>