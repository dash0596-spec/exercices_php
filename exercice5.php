<?php
    $n =3;
    echo "<table border ='1'>";
    for($i=1; $i<=10; $i++):
    echo "<tr>";
    echo "<td> $n * $i </td><td>" . ($i * $n). "</td>";
    echo "</tr>";
    endfor;
    echo"</table>";
?>