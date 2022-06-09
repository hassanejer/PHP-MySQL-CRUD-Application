<?php
    include 'connect.php';
    $id=$_GET['id'];

    $stm = $con->prepare('DELETE FROM users where id =?');
    $stm->execute(array($id));
    header('Location: index.php');