<?php 
$admin = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .class{
        color : red ;
    }
</style>
<body>
    <h1>Exo 4</h1>
    <ul>
    <?php 

        $i = 0;

        while($i < 5000 ){
            $i++;
            echo '<li>'.$i.'</li>';
          
        }
    ?>
    </ul>
</body>
</html>