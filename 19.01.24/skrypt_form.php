<?php
echo "Dziękujemy! Rejestracja przebiegła pomyślnie.<br>";
echo "Wprowadzone dane:<br>";
echo "Nazwisko:" . trim($_POST['nazw']) . "<br>";
echo "PESEL:". trim($_POST['pesel']) . "<br>";
echo "Imię:". trim($_POST['im']) . "<br>";
echo "Adres e-mail:" .   trim($_POST['adr']) . "<br>";

echo"<p>Miasto:</p>";

if (!empty($_POST['miasto'])){
    echo"<ul>";
    foreach ($_POST['miasto'] as $wartosc ){
echo"<li>$wartosc</li>";
    }
    echo"</ul>";
} else {
    echo"<p>".  $_POST['nazw']."Nieuzupełniono .<p>";
}

echo"<p>Znajomość języków:</p>";

if (!empty($_POST['języki'])){
    echo"<ul>";
    foreach ($_POST['języki'] as $wartosc ){
echo"<li>$wartosc</li>";
    }
    echo"</ul>";
} else {
    echo"<p>".  $_POST['nazw']."nie zna żadnego jezyka.<p>";
}
?>