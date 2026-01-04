<?php

for ($number = 2; $number <= 1000; $number++) {

    // Si le nombre est premier
    $isPrime = true;

    // On teste les diviseurs possibles
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            // Si un diviseur est trouvé, le nombre n'est pas premier
            $isPrime = false;
            break;
        }
    }

    // Si le nombre est premier, on l'affiche
    if ($isPrime) {
        echo $number . "<br />";
    }
}

?>