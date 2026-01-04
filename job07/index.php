<?php

$height = 10; // Hauteur du triangle

// Boucle qui gère les lignes du triangle
for ($row = 1; $row <= $height; $row++) {

    // Boucle qui affiche les étoiles sur la ligne courante
    for ($column = 1; $column <= $row; $column++) {
        echo "*";
    }
    echo "<br />";
}

?>