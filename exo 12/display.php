<?php
if(isset($_GET['name']) &&  isset($_GET['email'])){

        echo 'bonjour '.htmlentities($_GET['name']).' ton adresse email est: '.htmlentities($_GET['email']);
    }
    else{
        echo 'Veuillez passer par <a href="form.php">le formulaire</a> !';
    }
?>




