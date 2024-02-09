<?php
if (isset($_GET['imie']) && isset($_GET['nazwisko'])) {
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];

        echo"<p>Podane imię:$imie</p>";
        echo"<p>Podane nazwisko:$nazwisko</p>";
    }
?>