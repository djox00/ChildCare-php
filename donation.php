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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <link rel="stylesheet" href="donation.css">
        <link rel="stylesheet" href="sidebar.css">
    
  <script src="https://www.paypal.com/sdk/js?client-id=Aesdu8Cn7Cp1KCM9SpoVRT2Av7CUGiSua22Ob63DwUhHVb_Bc0kS_o6V1Rz3P4PzOhFOyMo_ko_-LOZp"></script>

        
</head>


<body>

<div id="holder">
<div id="header"> <?php include "./components/navbar.php" ?></div>
<div id="body">

<div class="container">   
  <div class="row">   
    <div class="col-lg-2 col-md-2 col-sm-12 justify-content-center" align="center">   
<div class="sidebar-menu">   
<div class="donation-item" > <a id="paypal"><i class="fab fa-cc-paypal"></i>  </a>      </div> 
<div class="donation-item"> <a id="visa"> <i class="fab fa-cc-visa"></i> </a> </div> 
<div class="donation-item"><i class="fa-solid fa-money-check-pen"></i></div>
</div>

</div>
<div class="col-lg-10 col-md-10 col-sm-12 " align="center">     
<div class="donation-container" id="container" >  
  
<div class="inner-donation-container" id="donation"> 




</div>







</div>
  
</div>
 
  
  
</div>
  </div>



  <?php include "sidebar.php" ?>
 </div></div>

<?php include "./footer.php"; ?>

  

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
<script type="text/javascript" src="sidebar.js"></script>
<script type="text/javascript" src="donation.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>


    </body>
    
   
    </html> 





<!--     <form action="https://www.paypal.com/donate" method="post" target="_top">
 <input type="hidden" name="business" value="djordjedjuric05@gmail.com">
 <input type="hidden" name="no_recurring" value="0">
 <input type="hidden" name="item_name" value="ChildCare">
 <input type="hidden" name="item_number" value="Test Donacija za ChildCare projekat">
 <input type="hidden" name="currency_code" value="EUR">

 <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
 <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form> -->