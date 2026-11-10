<?php
    echo"<table border='1'>";
    for($i=1; $i<=10 ;$i++):
        echo "<tr>";
        for($j=1; $j<=$i; $j++):
            echo"<td>".($i * $j) ."</td>";
        endfor ;
        echo "</tr>";   

    endfor;
    echo"</table>";
?>