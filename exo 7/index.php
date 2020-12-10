<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: red;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <?php 
    
    $userInfos = [
                    'name' => 'pierre', 
                    'age' => 27,
                    'city' => 'marseille',
                    'tel' =>  '0707070707',
                ];

    echo "je m'appel <span>"  .$userInfos['name'].  "</span> j'ai <span>" .$userInfos['age']. "</span> ans j'habite a <span>" .$userInfos['city']. "</span> mon numéro es <span>" .$userInfos['tel']."</span>";
    
    ?>
</body>
</html>