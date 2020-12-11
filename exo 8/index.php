<?php

// Création d'un array contenant des utilisateurs avec leurs infos (les pays sont eux même un sous sous-tableau)
$userList = [
    [
        'name' => 'Alice',
        'age' => 32,
        'countries' => ['France', 'Italie'],
    ],
    [
        'name' => 'Bob',
        'age' => 26,
        'countries' => ['Japon'],
    ],
    [
        'name' => 'Jean',
        'age' => 71,
        'countries' => [],      // Pas de pays visité donc array vide
    ],
    [
        'name' => 'Julie',
        'age' => 19,
        'countries' => ['France', 'Espagne'],
    ],
    [
        'name' => 'Martin',
        'age' => 26,
        'countries' => ['Espagne', 'France', 'Russie'],
    ],
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>

    <?php

    // On parcours tous les utilisateurs avec un foreach pour afficher une structure HTML pour chacun d'entre eux
    foreach($userList as $userInfos){

        // Titre h2 avec le prénom de l'utilisateur actuellement extrait par le foreach dans $userInfos
        echo '<h2>' . $userInfos['name'] . '</h2>';

        // Idem avec les infos dans une phrase
        echo '<p>Je suis ' . $userInfos['name'] . ' et j\'ai ' . $userInfos['age'] . ' ans !</p>';
        echo '<p>Liste des pays visités :</p>';

        // Si l'utilisateur a visité au moins un pays (il faut que le tableau des pays soit d'une taille minimum de 1), alors
        // On affichera ces pays, sinon on ira dans le else pour afficher un message d'erreur
        if( count($userInfos['countries']) > 0 ){

            // Ouverture de la liste à puce
            echo '<ul>';

            // On parcours les pays pour les afficher un par un dans un li
            foreach($userInfos['countries'] as $country){
                echo '<li>' . $country . '</li>';
            }

            // Fermeture de la liste à puce
            echo '</ul>';


        } else {

            echo '<p style="color:red;">Cet utilisateur n\'a pas encore visité de pays !</p>';

        }
        // Trait de séparation entre les utilisateurs
        echo '<hr>';

    }
    
    ?>
</body>
</html>