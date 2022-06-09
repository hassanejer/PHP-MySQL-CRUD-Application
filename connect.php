<?php
    try{
        $con = new PDO("mysql:host=localhost;dbname=crudlhcen","root","");
        
    }catch(PDOException $e){

        echo "Connection failed" . $e->getMessage();
    }
    
?>