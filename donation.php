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
  <?php include "sidebar.php" ?>



  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
  <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
<table>
    <tr>
      <td>Bass Guitar Strings</td>
      <td>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
          <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </td>
    </tr>
  </table>

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



    </body>
    
   
    </html> 