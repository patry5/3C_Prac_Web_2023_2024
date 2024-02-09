<?php
if (isset($_POST['imie']) && isset($_POST['nazwisko'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

        echo"<p>Podane imię:$imie</p>";
        echo"<p>Podane nazwisko:$nazwisko</p>";
    }
?>