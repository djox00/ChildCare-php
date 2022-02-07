<?php 

 $logged = NULL; 
if(isset($_SESSION['valid'])) {
$fname =  $_SESSION['fname']; 
$logged = $_SESSION['valid']; 
$svg_file = file_get_contents("https://avatars.dicebear.com/api/adventurer/$fname.svg");
$find_string   = '<svg';
$position = strpos($svg_file, $find_string);
$svg_file_new = substr($svg_file, $position);
}


else $logged = false; 

?> 





<link rel="stylesheet" href="./components/navbar.css">
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #262626; ">
                <div class="container-fluid">
                    <button class="navbar-toggler" style="border: none; box-shadow: none;" id="toggleButton" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            
                            <a class="navbar-item " aria-current="page" href="index.php"><i class="fas fa-home" style="transform: scale(1.3); margin-top: 2; margin-left: 10;" ></i></a>
                            <a class="navbar-item" href="about.php" >About</a>
                            <a class="navbar-item" href="contact.php" >Contact</a>
                            
                        </div>
                        <?php echo (!$logged) ? '<a class="navbar-item-login ms-auto" href="login.php"> <i class="fas fa-user"></i>Login</a>' : 
                        '<div class="navbar-item-login ms-auto"> <div class="avatar-container" id="myprofile"><div class="avatar" >' . $svg_file_new .'</div> <p class="avatar-text">My profile</p></div>
                        <a class="navbar-item-login ms-auto" href="login.php"> 
                        <i class="fas fa-sign-out-alt"></i>Logout</a></div>' ?>

                        
                    </div>
                </div>
        </div>
        </nav>
       
        