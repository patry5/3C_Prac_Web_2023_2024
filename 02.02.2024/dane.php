<?php
if (isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['comments']) && isset($_POST['consent'])) {
    $rok = $_POST['year'];
    $plec = $_POST['gender'];
    $komentarz = $_POST['comments'];
    $zgoda = $_POST['consent'];
    echo "<p>Podana rok: $rok</p>";
    echo "<p>Podana płeć: $plec</p>";
    echo "<p>Podany komentarz: $komentarz</p>";
    echo "<p>Zgoda: $zgoda</p>";
}else {
    echo "Nie podano wszykich wymaganych danych";
}
?>