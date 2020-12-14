<?php

// Exercice 10-a : Afficher la date avec la fonction date sous le format suivant : "Friday 11 December 2020, 14h 55m 30s"

echo date('l d F Y, H\h i\m s\s');


echo '<br>';
echo '<br>';

// Exercice 10-b : Chercher à afficher la date avec strftime en français en vous aidant de google et de php.net
// format attendu : "vendredi 11 décembre 2020, 15h 21m 30s"

// Mettre en français
setlocale(LC_TIME, 'fr_FR.utf8', 'fra');

echo strftime('%A %d %B %Y, %Hh %Mm %Ss');


echo '<br>';
echo '<br>';


// Exercice 10-c : Avec la fonction date(), afficher à l'écran la date qu'il sera dans 26 jours et 16h sous le format suivant : 2020-12-11 06:42:30

echo date('Y-m-d H:i:s', time() + (26*24*3600) + (16*3600) );


echo '<br>';
echo '<br>';


// Exercice 10-d : Créer une variable contenant cette date précise textuelle : "2004-04-16 12:00:00". Le but est d'ajouter 435 jours à cette date puis de l'afficher sous le format suivant : "samedi 25 juin 2005, 06h 00m 00s"

$dateToTransform = '2004-04-16 12:00:00';   
echo strftime(("%A %d %B %Y, %Hh %Mm %Ss"), strtotime("$dateToTransform, +0 year +435 day -6 hour"));

