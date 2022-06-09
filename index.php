<?php
include 'connect.php';
  if (isset($_POST['create'])){
        
    include 'create.php';

};
if(isset($_GET['id'])){
  $id= $_GET['id'];

  $stm =$con->prepare('SELECT * from users where id=? ');

  $stm->execute(array($id));

  $srt=$stm->fetch();

  $nom = $srt['nom'];
  $prenom = $srt['prenom'];
  $email = $srt['email'];
  $codePostal = $srt['codePostal'];

  

};

include 'update.php';

if(isset($_POST['deleteAll'])){
  $stm=$con->prepare('TRUNCATE TABLE users');
  $stm->execute();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP MySQL CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container-fluid text-center py-3 bg-light">
        <h1 class='text-primary'>PHP MySQL CRUD Application</h1>
    </div>

    <div class="container">
        <form  method='POST'>
          
            <label  class="form-label">Nom</label>
            <input type="text" name='nom' class="form-control" value="<?php if(isset($_GET['id'])){echo $nom;} ?>" id="nom" >
            <label  class="form-label">Prenom</label>
            <input type="text" name='prenom' class="form-control" value="<?php if(isset($_GET['id'])){echo $prenom;} ?>" id="prenom" >
            <label  class="form-label">Email</label>
            <input type="email" name='email' class="form-control" value="<?php if(isset($_GET['id'])){echo $email;} ?>" id="email" >
            <label  class="form-label">Code Postal</label>
            <input type="text" name='postal' class="form-control" value="<?php if(isset($_GET['id'])){echo $codePostal;} ?>" id="postal" >
            
          
            
            <div class="container-fluid">
              <div class="row my-4 text-center">
                <div class="col-md-3">
                <div class="d-grid gap-2">
                  <input class="btn btn-success" type='submit'  name='create'  value='Create'  >
                </div>
                  
                </div>
                <div class="col-md-3"> 
                  <div class="d-grid gap-2">
                    <input class="btn btn-info" type='submit' name='read' value='Read' >
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="d-grid gap-2">
                    <input class="btn btn-warning" type='submit'  name='update' value='Update'  >
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="d-grid gap-2">
                    <input class="btn btn-danger" type='submit'  name='deleteAll' value='Delete All'  >
                  </div>
                </div>
              </div>
            </div>
           
        </form>
    </div>
    <div class="container-fluid ">
      <table class="table table-striped mx-auto ">
          <thead class='text-center'>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Code Postal</th>
          </thead>
          <tbody>
            <?php
            if (isset($_POST['read'])){
    
              include 'read.php';
          
          };
            
            ?>
          </tbody>





      </table>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- <script src='main.js'></script> -->
  </body>
</html>