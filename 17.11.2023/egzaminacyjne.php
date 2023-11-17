<?php
    define("KURS_EURO", 4.32);
    define("KURS_DOLAR", 3.21);
    define("KURS_FRANK", 3.98);

    $kwotaPLN = 100;

    $wybranaWaluta = "euro";
    $przeliczonaKwota = 0;

    switch ($wybranaWaluta) {
        case "euro":
            $przeliczonaKwota = $kwotaPLN / KURS_EURO;
            echo "<p>Przeliczona kwota: $przeliczonaKwota Euro</p>";
            break;
        case "dolar":
            $przeliczonaKwota = $kwotaPLN / KURS_DOLAR;
            echo "<p>Przeliczona kwota: $przeliczonaKwota Dolarów</p>";
            break;
        case "frank":
            $przeliczonaKwota = $kwotaPLN / KURS_FRANK;
            echo "<p>Przeliczona kwota: $przeliczonaKwota Franków</p>";
            break;
        default:
            echo "Niepoprawny wybór waluty.";
    }