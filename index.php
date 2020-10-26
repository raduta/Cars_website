<?php 
include("assets/db.php");
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <title>Masini</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
     <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo"><em> DDF Cars</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="cars.php">Masini</a></li>
                            <li><a href="motociclete.php">Motociclete</a></li>
                            <li><a href="autobuse.php">Autobuse</a></li>
                            <li><a href="contact.php">Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Bun venit</h6>
                <h2>in parcul nostru auto <em></em> </h2>
                <div class="main-button">
                    <a href="contact.php">Contacteaza-ne!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2> <em>Noutati</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
    $db=mysqli_connect("localhost","root","","cars");
    global $db;

    $get_cars="select * from car order by car_id desc LIMIT 3  ";
    $run_car=mysqli_query($db,$get_cars);

    while($row_cars=mysqli_fetch_array($run_car)){

        $car_id=$row_cars['car_id'];
        $car_name=$row_cars['car_name'];
        $car_img1=$row_cars['car_img1'];
        $car_pret=$row_cars['car_pret'];
        $car_km=$row_cars['car_km'];
        $car_model=$row_cars['car_model'];
        $car_motor=$row_cars['car_motor'];
        $car_cutie=$row_cars['car_cutie'];
  
    echo "
                   
             <div class='col-lg-4'>
                    <div class='trainer-item'>
                        <div class='image-thumb'>
                        <a href='car-detail.php?car_id=$car_id'>
                            <img class='img-responsive' src='poze_masini/$car_img1'>
                        </div>
                        <div class='down-content'>
                            <span> $car_pret</span>
                            <h4>$car_name &nbsp; $car_model </h4>
                            <p>
                                <i class='fa fa-dashboard'></i> $car_km &nbsp;&nbsp;&nbsp;
                                <i class='fa fa-cube'></i>  $car_motor  &nbsp;&nbsp;&nbsp;
                                <i class='fa fa-cog'></i>  $car_cutie &nbsp;&nbsp;&nbsp;
                            </p>
                            <ul class='social-icons'>
                                <li><a href='car-detail.php?car_id=$car_id'>+ vezi masina</a></li>
                            </ul>
                        </div>
                    </div>
             </div>  
     
         ";
}
  ?>
      </div>       
        </div>
    </section>         
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Despre noi <em></em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Cu o experienta de peste 10 ani va oferim servicii de consultanta in alegerea unui vehicul</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
   

   

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Trimite-ne un <em>mesaj</em></h2>
                        <p></p>
                        <div class="main-button">
                            <a href="contact.php">Contacteaza-ne</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

   
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 M Cars
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>