<?php
$fnameError = false;
$lnameError = null;
$emailError = null;
$pwError = null; 
$accountCreated = null;  
$db_register_user = 'register'; 
$db_register_pw = '';  
    require 'dbConnect.php';
    use rjesenje\Authenticate\CheckPassword;
    if ( !empty($_POST)) {
    
         
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['mail'];
        $password = trim($_POST['pw']);
        $Cpassword = trim($_POST['cpw']);
        $user = $_POST['user']; 
         $valid = false; 
        require_once 'Authenticate/CheckPassword.php';
        $checkPwd = new CheckPassword($password, 10);
        $checkPwd->requireSymbols();
        if ($checkPwd->check()) {
         
            $valid = true; 
            $pwError = false; 
        } else {
            $result = $checkPwd->getErrors();
           $valid = false; 
           $pwError = true; 
        } 

        if(empty($_POST['fname'])){
            $valid = false; 
            $fnameError = true; 
        }

        if(empty($_POST['lname'])){
            $valid = false; 
            $lnameError = true; 
        }

        if(empty($_POST['mail'])){
            $valid = false; 
            $emailError = true; 
        }


        if(empty($_POST['user'])){
            $valid = false; 
            $userError = true; 
        }
        if($valid){ 
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `users` WHERE `user_name` = ? ";
        $q = $pdo->prepare($sql);
        $q->execute(array( $user)); 
        $data = $q->fetch(PDO::FETCH_ASSOC);

        if(!empty($data)){ 
            $valid = false; 
            $userError = true; 
        }
        Database::disconnect();
    }

       
        if ($valid) {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO users (`first_name`, `last_name`, `user_name`, `password`, `email`) VALUES (?,?,?,?,?);";
                $q = $pdo->prepare($sql);
                $q->execute(array( $fname,$lname, $user,$hashed_password,$email));
                $accountCreated = true; 
                header("Location: login.php");
            Database::disconnect();
           
        }

        
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
    <link rel="stylesheet" href="register.css">
</head>


<body>
  <?php include "./components/navbar.php" ?>
<?php if (isset($result)) {
    
    echo '<div class="errorBox">';
    foreach ($result as $item) {
        echo "$item    ";
    }
    echo ' </div>';
}                                   ?>
<div class="main" id="registerCard"> 
    <p class="sign" align="center">Create a new account!</p>
    <form class="form1" method="post" action="register.php" >
    <input name="fname" value="<?php echo isset($fname)  ? $fname : '' ?>" class="from-input" type="text" align="center" placeholder="<?php echo ($fnameError) ? 'Please enter your first name!' : 'First name';  ?>">
    <input name="lname" value="<?php echo isset($lname)  ? $lname : '' ?>" class="from-input" type="text" align="center" placeholder="Last name">
      <input name="user" value="<?php echo isset($user)  ? $user : '' ?>" class="from-input" type="text" align="center" placeholder="Username">
      <input name="pw" <?php echo ($pwError) ? "style='background-color: rgba(212, 47, 47, 0.319); '" : ""  ?> class="from-input" type="password" align="center" placeholder="Password">
      <input name="cpw" <?php echo ($pwError) ? "style='background-color: rgba(212, 47, 47, 0.319); '" : ""  ?> class="from-input" type="password" align="center" placeholder="Confirm Password">
      <input name="mail" value="<?php echo isset($email)  ? $email : '' ?>" class="from-input" type="email" align="center" placeholder="email">
      <div class="register-wrap"> <button type="submit" class="register" >Register</a> </div> 
     </div>


 


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="login.js"></script>
<script src="https://kit.fontawesome.com/572ce00a22.js" crossorigin="anonymous"></script>
    </body>
    
   
    </html> 

    