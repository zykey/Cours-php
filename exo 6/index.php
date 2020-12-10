<?php 
$name = ['Samy','sarah','sofiane','sofia','samuel','sabrine','sabri','samir','julie','camille'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php
    
    for($i = 0; $i < count($name); $i++){
        echo '<li>'.$name[$i].'</li>';
    }

     ?>
</ul>
</body>
</html>