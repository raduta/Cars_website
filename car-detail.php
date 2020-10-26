<?php 
include("assets/db.php");
?>
<?php 
if(isset($_GET['car_id'])){
    $car_id=$_GET['car_id'];
    $get_car="select * from car where car_id='$car_id'";
    $run_car=mysqli_query($con,$get_car);
    $row_car=mysqli_fetch_array($run_car);
    $car_admin_id=$row_car['car_admin_id'];
    $car_name=$row_car['car_name'];
    $car_model=$row_car['car_model'];
    $car_an=$row_car['car_an'];
    $car_fuel=$row_car['car_fuel'];
    $car_km=$row_car['car_km'];
    $car_locuri=$row_car['car_locuri'];
    $car_putere=$row_car['car_putere'];
    $car_motor=$row_car['car_motor'];
    $car_usi=$row_car['car_usi'];
    $car_cutie=$row_car['car_cutie'];
    $car_culoare=$row_car['car_culoare'];
    $car_descriere=$row_car['car_descriere'];
    $car_pret=$row_car['car_pret'];
    $car_img1=$row_car['car_img1'];
    $car_img2=$row_car['car_img2'];
    $car_img3=$row_car['car_img3'];
    $car_img4=$row_car['car_img4'];
    $car_img5=$row_car['car_img5'];
    $car_img6=$row_car['car_img6'];
    $car_img7=$row_car['car_img7'];
    $car_img8=$row_car['car_img8'];
    $car_img9=$row_car['car_img9'];
    $car_img10=$row_car['car_img10'];
    $car_img11=$row_car['car_img11'];

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
                        <a href="index.php" class="logo"><em> M cars</em></a>
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
                        
                        <h2><small><?php echo $car_name ?>&nbsp;&nbsp;<?php echo $car_model?></small> <em></em></h2>
                        <h2><?php echo $car_pret ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img1 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img2 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img3 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img4 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img5 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img6 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img7 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img8 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img9 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img10 ?>" alt="imagine indisponibila">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="poze_masini/<?php echo $car_img11 ?>" alt="imagine indisponibila">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-cog"></i>Specificatii masina</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-info-circle"></i>Descriere masina</a></li>
                  
                  <li><a href='#tabs-4'><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Specificatii masina</h4>

                    <div class="row">
                       

                       <div class="col-sm-6">
                            <label>Marca</label>
                       
                            <p><?php echo $car_name ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label> Model</label>
                       
                            <p><?php echo $car_model ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>An inregistrare</label>
                       
                            <p><?php echo $car_an ?></p>
                       </div>
                       <div class="col-sm-6">
                            <label>Tip</label>
                       
                            <p>Second hand</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Kilometraj</label>
                       
                            <p><?php echo $car_km ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Carburant</label>
                       
                            <p><?php echo $car_fuel ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Capacitate cilindrica</label>
                       
                            <p><?php echo $car_motor ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Cai putere</label>
                       
                            <p><?php echo $car_putere ?></p>
                       </div>


                       <div class="col-sm-6">
                            <label>Cutie</label>
                       
                            <p><?php echo $car_cutie ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Numar de locuri</label>
                       
                            <p><?php echo $car_locuri ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Usi</label>
                       
                            <p><?php echo $car_usi ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Culoare</label>
                       
                            <p><?php echo $car_culoare ?></p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Vehicle Description</h4>
                    
                    <p><?php echo $car_descriere ?></p> 
                   </article>
                
                  <article id='tabs-4'>
                    <h4>Contact</h4>
             <?php      
              $get_admin="select * from admin where admin_id='$car_admin_id'";
    $run_admin=mysqli_query($con,$get_admin);
    $row_admin=mysqli_fetch_array($run_admin);
    
    $admin_name=$row_admin['admin_name'];
    $admin_telefon=$row_admin['admin_telefon'];
    ?>
                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Nume</label>

                            <p><?php echo $admin_name ?></p>
                        </div>
                       
                        <div class="col-sm-6">
                            <label>Telefon</label>
                            <p><?php echo $admin_telefon ?></p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">lup@gmail.com</a></p>
                        </div>
                    </div>
                  </article>
                </section>
              </div>
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