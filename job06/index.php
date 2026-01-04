<?php

$width = 20;   // Largeur du rectangle
$height = 10;  // Hauteur du rectangle

// Boucle qui gère les lignes (hauteur)
for ($row = 0; $row < $height; $row++) {

    // Boucle qui gère les colonnes (largeur)
    for ($column = 0; $column < $width; $column++) {
        echo "*"; // Affiche un caractère
    }

    // Retour à la ligne après chaque ligne du rectangle
    echo "<br />";
}

?>