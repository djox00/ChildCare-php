<?php
require_once 'dbConnect.php';


if(isset($_SESSION['valid'])){ 
   $pdo = Database::connect();
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $id = $_SESSION['id']; 
   $sql = "SELECT * FROM `users` WHERE `id` = ?;"; 
   $q = $pdo->prepare($sql);
   $q->execute(array($id)); 
   $data = $q->fetch(PDO::FETCH_ASSOC);
   if(!empty($data)){ 
   $fname = $data['first_name']; 
   $lastname = $data['last_name']; 
   $username = $data['user_name'];
   $email = $data['email'];  
   }
   Database::disconnect(); 
  }

 
$changeValid = NULL; 
$fname_ERROR = TRUE; 
$lname_ERROR =TRUE; 
$mail_ERROR = TRUE; 
$username_ERROR = TRUE; 


if ( !empty($_POST)) {


  if(!empty($_POST['newfname'])){ 
    $fname_ERROR = false; 
  }
  if(!empty($_POST['newlname'])){ 
    $lname_ERROR = false; 
  }
  if(!empty($_POST['newmail'])){ 
    $mail_ERROR = false; 
  }
  if(!empty($_POST['newuname'])){ 

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `users` WHERE `user_name` = ? ";
    $q = $pdo->prepare($sql);
    $q->execute(array( $_POST['newuname'])); 
    $data = $q->fetch(PDO::FETCH_ASSOC);
if(!empty($data)){
  $username_ERROR = true; 
}
Database::disconnect(); 
    $username_ERROR = false; 
  }
  if(!$mail_ERROR && !$lname_ERROR && !$fname_ERROR && !$username_ERROR){ 
    require_once 'dbConnect.php';
    $id = $_SESSION['id']; 

    $newfname = $_POST['newfname']; 
    $newlname = $_POST['newlname']; 
    $newmail = $_POST['newmail']; 
    $newusername = $_POST['newuname'];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET first_name = ?, last_name = ?, user_name = ?, email = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array( $newfname,$newlname,$newusername, $newmail,$id));

    $fname =  $newfname;
    $lastname = $newlname;
    $username =  $newusername;
    $email = $newmail;

    Database::disconnect();
  }

}  

$confirmNewpassword_ERROR = false; 
$newPassword_ERROR = false; 
$passwordProblem = NULL; 
if(empty($_POST['newPassword'])){ 
  $newPassword_ERROR = true; 
}
if(empty($_POST['confirmNewpassword'])){ 
  $confirmNewpassword_ERROR = true; 
}

if(!$newPassword_ERROR && !$confirmNewpassword_ERROR){ 
  $passwordProblem = false; 
  require_once 'dbConnect.php';
  $id = $_SESSION['id']; 
  $newPassword = $_POST['newPassword']; 
  $confirmNewpassword = $_POST['confirmNewpassword']; 
  if($newPassword==$confirmNewpassword){
    $hashed_password = password_hash($newPassword,PASSWORD_DEFAULT); 
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array( $hashed_password,$id));
    Database::disconnect();

  }  } else {$passwordProblem = true; }

 

?> 

<div class="backdrop" id="backdrop" > 
  <span class="sdbr"> 
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <?php echo ' <div class="avatar-sidebar-container"><p class="avatar-text-sidebar">Zdravo,  '. $fname. '</p><div class="avatar-sidebar" >' . $svg_file_new .'</div> </div>' ?>

 <div class="test" > <a class="menu-item" id="userData" >  Uredi podatke </a> </div>
  <div class="box1">
 <form class="change-data-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
 <p class="input-label">Ime:</p>       
<input name="newfname" type="text" pattern="[A-Za-z0-9]+" value="<?php echo ($logged) ? $fname : '';?>">  
<p class="input-label">Prezime:</p>  
<input name="newlname" pattern="[A-Za-z0-9]+" type="text" value="<?php echo ($logged) ? $lastname : '';?>">  
<p class="input-label">Korisničko ime:</p>   
<input name="newuname" pattern="[A-Za-z0-9]+"  type="text" value="<?php echo ($logged) ? $username : '';?>"> 
<p class="input-label">e-mail:</p>  
<input name="newmail" type="text" value="<?php echo ($logged) ? $email : '';?>">   
<button type="submit" class="submit-changes">Save</button>
</form> 
</div>  

 <a class="menu-item" id="Changepassword">Promijeni šifru</a> 
 <div class="box2">
 <form class="change-data-form" method="post" action="index.php"> 
 <p class="input-label">Nova šifra:</p>     
<input name="newPassword" type="password" >
<p class="input-label">Potvrdi šifru:</p>      
<input name="confirmNewpassword" type="password" >    
<button type="submit" class="submit-changes">Save</button>  
</form>
</div> 
       <!-- Potrebno rijesiti to sto se stranica reloada kada se klikne save, samim tim sto se reloada nije moguće odraditi error prikaz  -->
 <a class="menu-item" id="activity">Moje aktivnosti</a>
  <div class="box3">
     
  <p class="input-label">Donacije poklona:  </p>   

  <hr style="color: white; width: 80%; margin-left: 10%; ">

   <?php  
   $pdo = Database::connect(); 
   $sql = "SELECT * FROM `wishes` WHERE `user_id` = $id "; 
   foreach ($pdo->query($sql) as $row) {
     
    echo "<div style='width: 80%; margin-left: 10%;'><p style='color: #07a9b4da;'>" . $row['kids_ime'] . ' - <span style="color: rgb(129, 129, 129); ">' . '  ' . $row['wish'] . "</span></p></div>";    



    } 
   Database::disconnect(); 
   
   
   ?> 


  <hr style="color: white; width: 80%; margin-left: 10%; ">




</div>

</span>
 
</div>

</div>