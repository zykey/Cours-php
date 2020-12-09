<?php 
    $color = 'red';
    $name = 'Anthony';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color : <?php echo $color; ?>;
        }
    </style>
</head>
<body>
    <h1>Exo 2</h1>
    <?php

    echo "<h1>Salut a toi $name</h1>"

    ?>  


</body>
</html>