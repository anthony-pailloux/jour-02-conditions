<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i === 42) {
        // attention ici je place cette condition en 1er car si je la met apres la deuxieme elle sera intercepté par celle-ci et ne s'affichera pas car 42 est entre 25 et 50
        echo "La Plateforme_<br/>";
        
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u><br/>";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br/>";
    } else {
        echo $i . "<br/>";
    }
}

?>