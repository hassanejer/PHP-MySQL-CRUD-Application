<?php

 
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['postal'])){

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $postal = $_POST['postal'];

            $stm = $con-> prepare("INSERT INTO users VALUES(Null, ?,?,?,?)");

            $stm->execute(array($nom,$prenom,$email,$postal));

            header('Location: index.php');
        }else{
            echo 'Echec';
        }
   