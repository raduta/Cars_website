<?php
include("check_session.php");
include("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
  $car_cat_id=$_POST['car_cat_id'];
  $car_admin_id=$_POST['car_admin_id'];
  $car_name= $_POST['car_name'];
  $car_model= $_POST['car_model'];
  $car_an= $_POST['car_an'];
  $car_fuel= $_POST['car_fuel'];
  $car_km= $_POST['car_km'];
  $car_locuri= $_POST['car_locuri'];
  $car_putere= $_POST['car_putere'];
  $car_motor= $_POST['car_motor'];
  $car_usi= $_POST['car_usi'];
  $car_cutie= $_POST['car_cutie'];
  $car_culoare= $_POST['car_culoare'];
  $car_descriere= $_POST['car_descriere'];
  $car_pret= $_POST['car_pret'];

//picture coding
$car_img1=$_FILES['car_img1']['name'];
$car_img2=$_FILES['car_img2']['name'];
$car_img3=$_FILES['car_img3']['name'];
$car_img4=$_FILES['car_img4']['name'];
$car_img5=$_FILES['car_img5']['name'];
$car_img6=$_FILES['car_img6']['name'];
$car_img7=$_FILES['car_img7']['name'];
$car_img8=$_FILES['car_img8']['name'];
$car_img9=$_FILES['car_img9']['name'];
$car_img10=$_FILES['car_img10']['name'];
$car_img11=$_FILES['car_img11']['name'];

$temp_name1=$_FILES['car_img1']['tmp_name'];
$temp_name2=$_FILES['car_img2']['tmp_name'];
$temp_name3=$_FILES['car_img3']['tmp_name'];
$temp_name4=$_FILES['car_img4']['tmp_name'];
$temp_name5=$_FILES['car_img5']['tmp_name'];
$temp_name6=$_FILES['car_img6']['tmp_name'];
$temp_name7=$_FILES['car_img7']['tmp_name'];
$temp_name8=$_FILES['car_img8']['tmp_name'];
$temp_name9=$_FILES['car_img9']['tmp_name'];
$temp_name10=$_FILES['car_img10']['tmp_name'];
$temp_name11=$_FILES['car_img11']['tmp_name'];

move_uploaded_file($temp_name1,"poze_masini/$car_img1");
move_uploaded_file($temp_name2,"poze_masini/$car_img2");
move_uploaded_file($temp_name3,"poze_masini/$car_img3");
move_uploaded_file($temp_name4,"poze_masini/$car_img4");
move_uploaded_file($temp_name5,"poze_masini/$car_img5");
move_uploaded_file($temp_name6,"poze_masini/$car_img6");
move_uploaded_file($temp_name7,"poze_masini/$car_img7");
move_uploaded_file($temp_name8,"poze_masini/$car_img8");
move_uploaded_file($temp_name9,"poze_masini/$car_img9");
move_uploaded_file($temp_name10,"poze_masini/$car_img10");
move_uploaded_file($temp_name11,"poze_masini/$car_img11");

		
mysqli_query($connection,"insert into car (car_cat_id,car_admin_id,car_name,car_model,car_an,car_fuel,car_km,car_motor,
car_usi,car_cutie,car_culoare,car_locuri,car_putere,car_descriere,
 car_pret,car_img1,car_img2,car_img3,car_img4,car_img5,
 car_img6,car_img7,car_img8,car_img9,car_img10,car_img11) 
values ('$car_cat_id','$car_admin_id','$car_name','$car_model','$car_an','$car_fuel','$car_km','$car_motor',
'$car_usi','$car_cutie','$car_culoare','$car_locuri','$car_putere','$car_descriere','$car_pret',
'$car_img1','$car_img2','$car_img3','$car_img4','$car_img5',
'$car_img6','$car_img7','$car_img8','$car_img9','$car_img10','$car_img11')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");


mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
  <?php include("include/side_bar.php");?>
  

    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span> Adauga Masini </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_masini.php" method="post" name="form" enctype="multipart/form-data">

        <p>Alege utilizator</p>
      <select class="input-lg thumbnail form-control" name="car_admin_id" id="car_admin_id">
      <option>Alegeti utilizator</option>
              <?php 
              $get_c_admin="select * from admin ";
              $run_c_admin=mysqli_query($connection,$get_c_admin);
              while($row_c_admin=mysqli_fetch_array($run_c_admin)){
              $admin_id=$row_c_admin['admin_id'];
              $admin_name=$row_c_admin['admin_name'];
              echo"
             <option value='$admin_id'> $admin_name </option>
              ";
              }
              ?>
            </select>
        <p>Alege categorie</p>

        <select class="input-lg thumbnail form-control" name="car_cat_id" id="car_cat_id">
        <option>Alegeti categoria</option>
                      <?php 
                      $get_c_categorie="select * from categorie ";
                      $run_c_categorie=mysqli_query($connection,$get_c_categorie);
                      while($row_c_categorie=mysqli_fetch_array($run_c_categorie)){
                      $cat_id=$row_c_categorie['cat_id'];
                      $cat_title=$row_c_categorie['cat_title'];
                      echo"
                     <option value='$cat_id'> $cat_title </option>
                      ";
                      }
                      ?>
                    </select>

        
        <p>Marca masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_name" id="car_name" autofocus style="width:100%" placeholder="Marca masina" required>
        <p>Model masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_model" id="car_model" autofocus style="width:100%" placeholder="Model masina" required>
        <p>An masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_an" id="car_an" autofocus style="width:100%" placeholder="An masina" required>
        <p>Carburant masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_fuel" id="car_fuel" autofocus style="width:100%" placeholder="Carburant masina" required>
        <p>Kilometraj masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_km" id="car_km" autofocus style="width:100%" placeholder="Kilometraj masina" required>
        <p>Locuri masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_locuri" id="car_locuri" autofocus style="width:100%" placeholder="Locuri masina" required>
        <p>Putere masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_putere" id="car_putere" autofocus style="width:100%" placeholder="Putere masina" required>
        <p>Motor masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_motor" id="car_motor" autofocus style="width:100%" placeholder="Motor masina" required>
        <p>Usi masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_usi" id="car_usi" autofocus style="width:100%" placeholder="usi" required>
        <p>Cutie masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_cutie" id="car_cutie" autofocus style="width:100%" placeholder="Cutie masina" required>
        <p>Culoare masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_culoare" id="car_culoare" autofocus style="width:100%" placeholder="Culoare masina" required>
        <p>Descriere</p>
        <textarea class="thumbnail form-control" name="car_descriere" id="car_descriere" style="width:100%; height:100px" placeholder="Descriere masina" required></textarea>
        <p>Pret masina</p>
        <input class="input-lg thumbnail form-control" type="text" name="car_pret" id="car_pret" autofocus style="width:100%" placeholder="pret masina" required>


      <p>Adauga Image 1</p>
      <input type="file" style="width:100%" name="car_img1" class="btn thumbnail" id="car_img1" >

      <p>Adauga Image 2</p>
      <input type="file" style="width:100%" name="car_img2" class="btn thumbnail" id="car_img2" >
                    
      <p>Adauga Image 3</p>
      <input type="file" style="width:100%" name="car_img3" class="btn thumbnail" id="car_img3" >

      <p>Adauga Image 4</p>
      <input type="file" style="width:100%" name="car_img4" class="btn thumbnail" id="car_img4" >

      <p>Adauga Image 5</p>
      <input type="file" style="width:100%" name="car_img5" class="btn thumbnail" id="car_img5" >

      <p>Adauga Image 6</p>
      <input type="file" style="width:100%" name="car_img6" class="btn thumbnail" id="car_img6" >

      <p>Adauga Image 7</p>
      <input type="file" style="width:100%" name="car_img7" class="btn thumbnail" id="car_img7" >

      <p>Adauga Image 8</p>
      <input type="file" style="width:100%" name="car_img8" class="btn thumbnail" id="car_img8" >

      <p>Adauga Image 9</p>
      <input type="file" style="width:100%" name="car_img9" class="btn thumbnail" id="car_img9" >

      <p>Adauga Image 10</p>
      <input type="file" style="width:100%" name="car_img10" class="btn thumbnail" id="car_img10" >

      <p>Adauga Image 11</p>
      <input type="file" style="width:100%" name="car_img11" class="btn thumbnail" id="car_img11" >
    
      <div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Adauga masina</button>
    </div>
        </form>
 
	</div>

</div>
</div>


</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>