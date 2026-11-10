<?php
    $lignes = 6;

    for ($i = 1; $i <= $lignes; $i++):
        // espaces à gauche pour centrer
        for ($j = 1; $j <= $lignes - $i; $j++):
            echo "&nbsp;";
        endfor;

        // étoiles : 1, 3, 5, 7, 9, 11
        for ($k = 1; $k <= 2 * $i - 1; $k++):
            echo "*";
        endfor;

        echo "<br>";
    endfor;
?>