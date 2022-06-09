<?php
   

    
            if (isset($_POST['read'])){

              $stm= $con->prepare('SELECT * FROM users');
      
              $stm->execute();
              
              while ($srt=$stm->fetch(pdo::FETCH_ASSOC)){
      
                  echo '<tr><td class="text-center">'.$srt['id'].'</td>';
                  echo '<td  class="text-center">'.$srt['nom'].'</td>';
                  echo '<td  class="text-center">'.$srt['prenom'].'</td>';
                  echo '<td  class="text-center">'.$srt['email'].'</td>';
                  echo '<td class="text-center">'.$srt['codePostal'].'</td>';
                  echo '<td class="text-center"><a href="index.php?id='.$srt['id'].'" class="btn btn-warning btn-sm" id="btnUp">Update</a></td>';
                  echo '<td class="text-center"><a href="delete.php?id='.$srt['id'].'" class="btn btn-danger btn-sm" id="btnUp">Delete</a></td></tr>';
      
              };
              
      
      
          }