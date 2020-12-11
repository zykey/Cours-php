<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function print_rv2($array){

        echo '<pre>';
        print_r($array);
        echo '</pre>';

    }
    
    $fruit = ['pomme','banane', 'fraise'];
    // affiche de l'array des fruits avec la nouvelle fonction 
    print_rv2 ($fruit);
    

// Fonction qui retourne un prix initial additionné avec une taxe précisé en second paramètre (20% par defaut)
    function getTTCPrice($htprice, $tax = 20){
        return $htprice * (($tax / 100)+ 1);

    }
    // affichage du prix ttc de 19€
    echo getTTCPrice(19);



    ?>
</body>
</html>