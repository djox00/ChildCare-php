<?php
   ob_start();
   session_start();
 

?>




<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="sidebar.css">
   
</head>
<body>


  <?php include "./components/navbar.php" ?>
  <?php include "sidebar.php" ?>
      
       <video id="background-video" autoplay loop muted poster="./images/pinkkids.png">
  <source src="./images/Kidscrop.mp4" type="video/mp4">
</video>


   
       <div class="card"> 
 <div class="container"> 
       <div class="row"> 
         

        <div class="col-12 col-md-6 col-lg-3 overflow-hidden box"> 
       <a href="wishList.php"> 
        <div class="overlay1"> 
        <img id="image1" src="https://eyecare.org/site/wp-content/uploads/2013/07/18457531_m.jpg" alt="kids">
        <div class="card-description" id="c1"> <p> Ispuni želju<p> 

        <span> <p><span style="color: #a746b8;">Novogodišnja</span> akcija gdje vi imate priliku da usrećite jedno dijete tako što mu ispunite želju!</p></span>
        </div>
        </div> 
</a>
    </div> 
    <div class="col-12 col-md-6 col-lg-3 overflow-hidden box"> 
   
    <div class="overlay2"> 
  
        <img id="image2" src="https://www.akronchildrens.org/images-general/112980/image/medium/shutterstock_152100530.png" alt="kids">
        <div class="card-description" id="c2"><p> Donacije<p>
        <span> <p>Pomozi tako što doniraš i olakšaš život <span style="color: #a746b8;">djeci u ustanovama.</span>  </p></span>
        </div>
        </div> 
    </div> 
    <div class="col-12 col-md-6 col-lg-3 overflow-hidden box"> 
   
    <div class="overlay3">
   
        <img id="image3" src="https://www.thesun.co.uk/wp-content/uploads/2021/12/NINTCHDBPICT000700232363.webp" alt="kids">
        <div class="card-description" id="c3"><p>Dokumenti<p>
        <span> <p>Aktuelni pravilnici <span style="color: #a746b8;">JU Dom za djecu bez roditeljskog staranja Tuzla.</span> </p></span>
        </div>
    </div> 
    </div> 
    <div class="col-12 col-md-6 col-lg-3 overflow-hidden box"> 
   
    <div class="overlay4"> 
    
        <img id="image4" src="https://www.stormontvail.org/wp-content/uploads/2019/04/theimportanceoforgandonation.jpg" alt="kids">
          <div class="card-description" id="c4"><p>Galerija<p>
          <span> <p>Pogledaj naše slike!</p></span>
          </div>
    </div> 
    </div> 
   

       </div>
       </div>
       </div>
      
     
     
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="sidebar.js"></script>
<script src="https://kit.fontawesome.com/572ce00a22.js" crossorigin="anonymous"></script>

</body>
</html>