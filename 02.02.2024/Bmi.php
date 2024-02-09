<?php
if (isset($_POST['waga']) && isset($_POST['wzrost'])) {
    $waga = $_POST['waga'];
    $wzrost = $_POST['wzrost'];

    echo "<p>Podana waga: $waga</p>";
    echo "<p>Podany wzrost: $wzrost</p>";

    $BMI = $waga / ($wzrost * $wzrost); 
    echo "<p>BMI wynosi $BMI<p>";

    if ($BMI < 18.5) {
        echo "Niedowaga";
    } elseif ($BMI >= 18.5 && $BMI <= 24.99) { 
        echo "Wartość prawidłowa";
    } else {
        echo "Nadwaga";
    }
} else {
    echo "Niepodano wartości";
}
?>