<?php
/*===================================================================
Job 01
Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
chaque nombre (<br />).
Le nombre 42 doit être en gras et souligné (<b><u>...).
=====================================================================*/


for ($i=0; $i <= 1337 ; $i++) { 
    if ($i === 42) {
       echo "<b><u>" . $i . "</u></b><br />";
    } else {
        echo "$i<br />";
    }   
}


/*===================================================================
Job 02
Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />).
===================================================================*/

/*
for ($i = 0; $i <= 1337 ; $i++) { 
    if ($i === 26 || $i === 37 || $i === 88 || $i === 1111 || $i === 3233) {
        // la boucle parcourt tout et "continue" dit à PHP “ce tour là on saute l’affichage”.
        continue;
    }
    echo "$i<br/>";
}
*/

/* ==================================================================
Job 03
Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.
=====================================================================*/

/*
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
*/

/*==========================================================================
Job 04
Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
(“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.
===========================================================================*/

/*
for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz<br />";
    } elseif ($i % 3 === 0) {
        echo "Fizz<br />";
    } elseif ($i % 5 === 0) {
        echo "Buzz<br />";
    } else {
        echo $i . "<br />";
    }
}
*/

/*==========================================================================
Job 5
Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”).
==========================================================================*/

/*
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
*/

/*========================================================================
Job 6
Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur. Ces
dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables
facilement.
===========================================================================*/

/*
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
    */

/*==========================================================================
Job 7
Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être
stockée dans une variable $hauteur, modifiable facilement.

Exemple si $hauteur = 5
===========================================================================*/

/*
$height = 10; // Hauteur du triangle

// Boucle qui gère les lignes du triangle
for ($row = 1; $row <= $height; $row++) {

    // Boucle qui affiche les étoiles sur la ligne courante
    for ($column = 1; $column <= $row; $column++) {
        echo "*";
    }
    echo "<br />";
}
    */

