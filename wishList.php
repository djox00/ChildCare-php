<?php
   ob_start();
   session_start();

   if(!isset($_SESSION['type']) ){
    $_SESSION['type'] = 'guest'; 
 
   }


   $view_type = $_SESSION['type']; 
   include 'dbConnect.php';
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
        <link rel="stylesheet" href="wishList.css">
        <link rel="stylesheet" href="sidebar.css">
        
</head>


<body>

<div id="holder">
<div id="header">
  <?php include "./components/navbar.php" ?></div>



  <div id="body">
  <?php include "sidebar.php" ?> 
  <?php  



  
  
      $id = null;
      $id_user = null; 


      if ( !empty($_GET['remove_id'])) {

        $id = $_GET['remove_id'];
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE wishes SET `user_id` = NULL WHERE `id` = ?;";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();

        
      } 



      if ( !empty($_GET['id'])) {

        $id = $_GET['id'];
      $id_user = $_SESSION['id']; 

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
                     $sql2 = "SELECT `user_id` FROM `wishes` WHERE `id` = ? ";
                     $q = $pdo->prepare($sql2);
                     $q->execute(array( $id )); 
                     $users_id = $q->fetch(PDO::FETCH_ASSOC); 
                  
                     
                  if (is_null($users_id['user_id'])){  
                 
        $sql = "UPDATE wishes SET `user_id` = ? WHERE `id` = ?;";
        $q = $pdo->prepare($sql);
        $q->execute(array($id_user,$id));
        

      }
      Database::disconnect();
      }
    
?>
  <?php  echo ($view_type=='admin') ? '<i class="fas fa-users-cog admin-icon"><span> Admin view</span> </i>' : ''; ?>
  <div class="container">
 <div class="input">
            <div class="row">   
            
            <?php   
      $kid_id = null;
      $wish = null; 


      if ( !empty($_GET['kid_id']) && !empty($_GET['kids-wish'])    ) {

        $kid_id = $_GET['kid_id'];
        $wish = $_GET['kids-wish']; 

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT ime FROM `kids` WHERE `id` = ? ";
        $q = $pdo->prepare($sql);
        $q->execute(array( $kid_id )); 
        $ime_dijeta = $q->fetch(PDO::FETCH_ASSOC);
        $ime = $ime_dijeta['ime']; 

        
        $sql = "INSERT INTO wishes (`kids_id`,`kids_ime`,`wish`) VALUES (?,?,?);  ";
        $q = $pdo->prepare($sql);
        $q->execute(array($kid_id,$ime,$wish));
        Database::disconnect();

        
      }                                                          ?>
 
           

   
  <?php  echo ($view_type=='admin') ? 
  ' <div class="col-12 col-md-5 col-lg-3 overflow-hidden input-box1"><form>

  <select style="width: 200px;" class="kids-input-select" name="kid_id" id="kids"> <option value="" disabled selected>Odaberi dijete:</option>' 
   : '' ; 
   
    if(($view_type=='admin')){ 
    $pdo = Database::connect();
                   $sql = 'SELECT * FROM kids ORDER BY id DESC';
                   
                   foreach ($pdo->query($sql) as $row) {          
                    echo '<option class="kids-input-option" value="' . $row['id'] . '">'. $row['ime'] . ' ' . $row['prezime'] . '</option>'; 
                   } 
                   Database::disconnect(); }

      
    echo ($view_type=='admin') ? ' 
    </select></div>
    <div class="col-12 col-md-5 col-lg-3 overflow-hidden  input-box2"> <textarea placeholder="Unesite želju..." name="kids-wish" id="kids-wish" class="text-input-area" id="wish" name="wish" ></textarea></div>
    <div class="col-12 col-md-12 col-lg-2 overflow-hidden  input-box3"> <input id="but_read" class="kids-submit" type="submit" value="Dodaj"></div>
    ' : '' ; ?>

<div class="col-sm-12 col-md-2 col-lg-4 overflow-hidden"> </div>
  </div>
 
   </div>

        <?php  if ( !empty($_GET['remove_wish'])) {
          $wish_id = $_GET['remove_wish']; 

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'DELETE FROM wishes WHERE `id` = ?'; 
$q = $pdo->prepare($sql);
$q->execute(array($wish_id));
Database::disconnect();


        }

          ?> 
          

          

            <div class="row">
            
              <div class="description"> <input type="text" id="searchInput" onkeyup="searchHandler()" placeholder="Pronađi dijete..">
            </div>
            </div>
            <div class="row">
                <table class="table table-bordered table-style" id="myTable">
                  <thead>
                    <tr>
                      <th>Ime dijeta</th>
                      <th>Godina</th>
                      <th>Želja</th>
                      <th>Donator</th>
                      
                      <?php echo  ($logged) ?  "<th></th>" : ''; ?>
                      <?php echo  ($view_type=='admin') ?  "<th></th>" : ''; ?>
             
                    </tr>
                  </thead>
                  <tbody id="tbody1"> 
                  <?php
                   
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM wishes ORDER BY id DESC';
                  
                   foreach ($pdo->query($sql) as $row) {
                     $id_dijeta = $row['kids_id']; 
                     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);           // uzima godine dijeta jer su one u drugoj tabeli 
                     $sql2 = "SELECT godine FROM `kids` WHERE `id` = ? ";
                     $q = $pdo->prepare($sql2);
                     $q->execute(array( $id_dijeta )); 
                     $godine_dijeta = $q->fetch(PDO::FETCH_ASSOC);
                    


                     $user_id = $row['user_id']; 
                     $sql2 = "SELECT first_name,last_name FROM `users` WHERE `id` = ? ";
                     $q = $pdo->prepare($sql2);                                                     // uzima podatke korisnika koji zeli donirati tako da ih mozemo prikazati 
                     $q->execute(array( $user_id )); 
                     $users_data = $q->fetch(PDO::FETCH_ASSOC);


                    $id =  $row['id']; 
                     $sql3 = "SELECT `user_id` FROM `wishes` WHERE `id` = ? ";
                     $q = $pdo->prepare($sql3);
                     $q->execute(array( $id ));                                                        // uzimamo id donatora i gledamo da li je on null ako jeste dole cemo omoguciti da se donira ako nije null onda se ne moze donirati 
                     $users_id = $q->fetch(PDO::FETCH_ASSOC); 
                    $donation_possible =  (is_null($users_id['user_id']));  

                   $kids_name =  $row['kids_ime']; 



                
                            echo '<tr>';
                            echo '<td>'. $row['kids_ime'] . '  </td>';
                            echo '<td>'. $godine_dijeta['godine'] . '</td>';
                            echo '<td>'. $row['wish'] . '</td>';
                            echo   ($users_data!=NULL) ? '<td><p class="ime">'.$users_data['first_name'].'  '.$users_data['last_name'].'</p></td>' : '<td><p class="ime2"></p></td>'; 
                            echo  ($logged && $donation_possible) ? '<td>  <a class="doniraj" href="wishList.php?id='.$row['id'].'">Doniraj</a></td>' : '';   // Doniraj button 
                            echo  ($logged && !$donation_possible && ($row['user_id']==$_SESSION['id'] || $view_type=='admin' ) ) ? '<td>  <a class="otkazi" href="wishList.php?remove_id='.$row['id'].'">Otkaži</a></td>' : ''; // otkazi donaciju 
                            echo  ($logged && $view_type=='admin' ) ? '<td>  <a class="brisi" href="wishList.php?remove_wish='.$row['id'].'">Briši</a></td>' : ''; // otkazi donaciju
                            
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  
                  </tbody>
            </table>
        </div>
    </div> 

    </div>

    <?php include "./footer.php"; ?>
  

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALUHZQi30j2UTYUBNrShUDAWwYe4UhJ6c&libraries=places&callback=initMap&v=weekly"
      async
    ></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/572ce00a22.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="wishList.js"></script>
<script type="text/javascript" src="sidebar.js"></script>
    </body>
    
   
    </html> 