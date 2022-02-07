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
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="sidebar.css">
        
</head>


<body>
  <?php include "./components/navbar.php" ?>
  <?php include "sidebar.php" ?>
  <div class="about"> 
  <h1 class="ml10">
  <span class="text-wrapper">
    <span class="letters">Kako doći do nas?</span>
  </span>
</h1>
<div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  
  <div class="contact-card"> 
  <div class="container"> 
       <div class="row"> 
        <div class="col-lg-6"> 
        <div id="map"><span class="text-white"> Reload the page if you see this</span></div>
       
</div>
<div class="col-lg-6" style="text-align: center;"> 
<i class="fas fa-phone phonestyle"><div style="display: inline;font-family: 'Rubik', sans-serif; margin-left: 10px;" id="phone"></div></i><br><br>
<i class="fas fa-fax faxstyle" ><div style="display: inline; font-family: 'Rubik', sans-serif; margin-left: 10px;" id="fax"></div></i><br><br>
<i class="fas fa-envelope mailstyle"><div style="display: inline; font-family: 'Rubik', sans-serif; margin-left: 10px;" id="mail"></div></i>

    </div>


</div>
</div>
</div>


  

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALUHZQi30j2UTYUBNrShUDAWwYe4UhJ6c&libraries=places&callback=initMap&v=weekly"
      async
    ></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="index.js"></script>
<script type="text/javascript" src="login.js"></script>
<script src="https://kit.fontawesome.com/572ce00a22.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="sidebar.js"></script>
    </body>
    
   
    </html> 