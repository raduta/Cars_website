<?php 
include("assets/db.php");
?>
<?php 
if(isset($_GET['car_id'])){
    $car_id=$_GET['car_id'];
    $get_car="select * from car where car_id='$car_id'";
    $run_car=mysqli_query($con,$get_car);
    $row_car=mysqli_fetch_array($run_car);
    $car_name=$row_product['car_name'];
    $car_model=$row_product['car_model'];
    $car_an=$row_product['car_an'];
    $car_fuel=$row_product['car_fuel'];
    $car_km=$row_product['car_km'];
    $car_motor=$row_product['car_motor'];
    $car_usi=$row_product['car_usi'];
    $car_cutie=$row_product['car_cutie'];
    $car_culoare=$row_product['car_culoare'];
    $car_descriere=$row_product['car_descriere'];
    $car_pret=$row_product['car_pret'];
    $car_img1=$row_cars['car_img1'];
    $car_img2=$row_cars['car_img2'];
    $car_img3=$row_cars['car_img3'];
    $car_img4=$row_cars['car_img4'];
    $car_img5=$row_cars['car_img5'];
    $car_img6=$row_cars['car_img6'];
    $car_img7=$row_cars['car_img7'];
    $car_img8=$row_cars['car_img8'];
    $car_img9=$row_cars['car_img9'];
    $car_img10=$row_cars['car_img10'];
    $car_img11=$row_cars['car_img11'];

}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>M Cars</title>
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
                        <a href="index.php" class="logo"><em> DDF cars</em></a>
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

    <!-- ***** Call to Action Start ***** -->
    
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2> <em>Masini</em></h2>           
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <br>
        <br>
        <div class="container">
                 <div class="row">
    <?php
    $db=mysqli_connect("localhost","root","","cars");
    global $db;

    $get_cars="select * from car where car_cat_id=1";
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
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 DDF Cars
                       
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