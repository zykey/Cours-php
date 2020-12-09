<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p{
        color : red ;
    }
</style>
<body>
    <h1>Exo 3</h1>
    <?php 

    $admin = false;
    if( $admin === true){
        echo 'bienvenu <a href="#">admin</a>';
    } else{
        echo '<p>toi pas etre admin</p>';
    }

    ?>  

<a href=""></a>
</body>
</html>