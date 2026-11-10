<?php
$n = 2;
while ($n < 30):
    if ($n == 15):
        echo "<strong>$n</strong><br>";
    else:
        echo $n . "<br>";
    endif;
    $n += 3;
endwhile;
?>