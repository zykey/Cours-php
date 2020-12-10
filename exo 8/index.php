<?php 
//création d'un array contenant des utilisateur avec leurs infos (les pays sont eux meme un sous-tableau)
    $userInfos = [
        [
            'name' => 'pierre', 
            'age' => 27,
            'countries' => ['france', 'italie']
        ],
        [
            'name' => 'julie', 
            'age' => 19,
            'countries' => ['france', 'italie']
        ],
        [
            'name' => 'max', 
            'age' => 30,
            'countries' => [] //utilisateur na pas de pays
        ],
        [
            'name' => 'bob', 
            'age' => 25,
            'countries' => ['france', 'italie']
        ],
        [
            'name' => 'jean', 
            'age' => 18,
            'countries' => ['france', 'italie']
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $userInfos = [
                    [
                        'name' => 'pierre', 
                        'age' => 27,
                    ],
                    [
                        'name' => 'julie', 
                        'age' => 19,
                    ],
                    [
                        'name' => 'max', 
                        'age' => 30,
                    ],
                    [
                        'name' => 'bob', 
                        'age' => 25,
                    ],
                    [
                        'name' => 'jean', 
                        'age' => 18,
                    ],
                ];
    
                foreach($userInfos as $info){
                    echo "<h1>j'ai ".$info['age'].' ans</h1>';
                    echo "<p> je m'appel ".$info['name']." </p>";
                    
                }
    ?>
</body>
</html>