<?php
     session_start();
     if(isset($_SESSION))
     unset($_SESSION["username"]);
     unset($_SESSION["valid"]);
     unset($_SESSION['fname']); 
     unset($_SESSION['id']); 
     unset($_SESSION['type'] );
     unset($_SESSION['db_user']); 
    unset($_SESSION['db_password']); 
    
    ?>


<?php 
 
    
    require 'dbConnect.php';
    $user = NULL; 
    $password = NULL; 

    $loginError = NULL; 

    if(isset($_POST['username'])){ 

      $user = $_POST['username']; 
      $password = $_POST['password']; 
      $user_Database = 'main'; 
      $password_Database = ''; 
   
      
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `users` WHERE `user_name` = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($user)); 
    $data = $q->fetch(PDO::FETCH_ASSOC);

 
    if(!empty($data) )   { 

      if( password_verify($password,$data['password'])){ 
        $loginError = false; 

    $fname = $data['first_name']; 
    $lastname = $data['last_name']; 
    $username = $data['user_name']; 
    $id = $data['id']; 
    session_start(); 
    $_SESSION["valid"] = true; 
    $_SESSION["username"] = $username;
    $_SESSION["fname"] = $fname;
    $_SESSION["id"] = $id; 
   
    $sql = "SELECT * FROM `admins` WHERE `username` = ? && `user_id` = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array( $username,$id)); 
    $data = $q->fetch(PDO::FETCH_ASSOC);
     
    if(!empty($data)){       
      $_SESSION['type'] = 'admin'; 
     
    } 
   else {
     $_SESSION['type'] = 'user';

    }

    
 
    header("Location: index.php");
  }else { 
    $loginError = true; 
  }
} 
else { 
  $loginError = true; 
}
  
  Database::disconnect();

   }
    
    
    
    ?> 

    





<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>


<body>
  <?php include "./components/navbar.php" ?>
  <?php echo ($loginError) ? '<div class="errorBox"> You have entered a wrong passowrd or a wrong username!</div>' : '';?>
<div  class="main" id="loginCard">
  
    <p class="sign" align="center">Sign in</p>
    <form class="form1" method="POST" action="login.php">
      <input class="un" name="username" id="userNameInput "type="text" align="center" placeholder="Username">
      <input class="pass" name="password" type="password" align="center" placeholder="Password">
      <button class="submit" id="submit" type="submit" >Login</button>
       <a class="register" href="register.php" >Register</a>
     </div>


 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="login.js"></script>
<script src="https://kit.fontawesome.com/572ce00a22.js" crossorigin="anonymous"></script>
    </body>
    
   
    </html> 

    