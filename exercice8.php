<?php
    
    $somme = 0;
    for ($i = 1; $i <= 10; $i++):
        $somme += $i;
    endfor;

    $moyenne = $somme / 10;
    echo "Somme : $somme <br>";
    echo "Moyenne : $moyenne";

    /*
    <?php
    $somme = 0;
    $i = 1;
    while ($i <= 10):
        $somme += $i;
        $i++;
    endwhile;

    $moyenne = $somme / 10;
    echo "Somme : $somme <br>";
    echo "Moyenne : $moyenne";
    ?>
    */
?>