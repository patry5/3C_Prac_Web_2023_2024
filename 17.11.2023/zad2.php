<?php
        function pierwiastekKwadratowy($liczba) {

            if ($liczba >= 0) {
                return sqrt($liczba);
            } else {
                return "Nie można obliczyć pierwiastka z liczby ujemnej";
            }
        }

    
        $mojaLiczba = 16;

        echo "<p>Pierwiastek kwadratowy z $mojaLiczba wynosi: " . pierwiastekKwadratowy($mojaLiczba) . "</p>";

        $liczbaUjemna = -4;
        echo "<p>Pierwiastek kwadratowy z $liczbaUjemna: " . pierwiastekKwadratowy($liczbaUjemna) . "</p>";
  ?>