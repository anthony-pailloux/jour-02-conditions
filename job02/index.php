<?php

for ($i = 0; $i <= 1337 ; $i++) { 
    if ($i === 26 || $i === 37 || $i === 88 || $i === 1111 || $i === 3233) {
        // la boucle parcourt tout et "continue" dit à PHP “ce tour là on saute l’affichage”.
        continue;
    }
    echo "$i<br/>";
}

?>