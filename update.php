<?php 
    
    if(isset($_POST['update'])){
        $id=$_GET['id'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $codePostal=$_POST['postal'];
   
        $stm=$con->prepare("UPDATE users  SET nom=?,prenom=?,email=?,codePostal=? WHERE id=?");
        $stm->execute(array($nom,$prenom,$email,$codePostal,$id));
        header('location:index.php');

    }

?>