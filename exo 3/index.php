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
    <h1>Exo 3</h1>
    <?php 

    if( $admin){
        ?>
        <p>bienvenu <a href="#">admin</a></p>
        <?php
    } else{
        ?>
        <p class="error">toi pas etre admin</p>
        <?php
    }

    ?>  

<a href=""></a>
</body>
</html>