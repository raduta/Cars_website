<?php
include("check_session.php");
include("connection.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$car_id=$_GET['car_id'];
///////picture delete/////////
$result=mysqli_query($connection,"select car_img1,car_img2,car_img3,car_img4,car_img5,car_img6,car_img7,car_img8,car_img9,car_img10,car_img11 from car where car_id='$car_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="../poze_masini/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/
mysqli_query($connection,"delete from car where car_id='$car_id'")or die("query is incorrect...");
} 

///pagination
$page=$_GET['page'];

if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
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
   	<div class="container-fluid main-container">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Cosmetics List / Page <?php echo $page;?></h1></div><br>
<div class='table-responsive'>  
<div style="overflow-x:scroll;">
<table class="table  table-hover table-striped" style="font-size:18px">
<tr><th>Marca</th>
<th>Model</th>
<th>An</th>
 <th>Carburant</th>
 <th>Kilometraj</th>
 <th>Locuri</th>
 <th>Putere</th>
 <th>Motor</th>
 <th>Usi</th>
 <th>Cutie</th>
 <th>Culoare</th>
 <th>Descriere</th>
 <th>Pret</th>
 <th>Imagine1</th>
 <th>Imagine2</th>
 <th>Imagine3</th>
 <th>Imagine4</th>
 <th>Imagine5</th>
 <th>Imagine6</th>
 <th>Imagine7</th>
 <th>Imagine8</th>
 <th>Imagine9</th>
 <th>Imagine10</th>
 <th>Imagine11</th>
 <th><a class=" btn btn-primary" href="add_masini.php">Adauga masina noua</a></th>
</tr>
    
<?php 
$result=mysqli_query($connection,"select car_id,car_name,car_model,car_an,car_fuel,car_km,car_locuri,car_putere,car_motor,car_usi,car_cutie,car_culoare,car_descriere, car_pret,car_img1,car_img2,car_img3,car_img4,car_img5,car_img6,car_img7,car_img8,car_img9,car_img10,car_img11 from car where car_cat_id=2 Limit $page1,10")or die ("query 1 incorrect.....");

while(list($car_id,$car_name,$car_model,$car_an,$car_fuel,$car_km,$car_locuri,$car_putere,$car_motor,$car_usi,$car_cutie,$car_culoare,$car_descriere,$car_pret,$car_img1,$car_img2,$car_img3,$car_img4,$car_img5,$car_img6,$car_img7,$car_img8,$car_img9,$car_img10,$car_img11)=mysqli_fetch_array($result))
{
echo "<tr>
<td>$car_name</td>
<td>$car_model</td>
<td>$car_an</td>
<td>$car_fuel</td>
<td>$car_km</td>
<td>$car_locuri</td>
<td>$car_putere</td>
<td>$car_motor</td>
<td>$car_usi</td>
<td>$car_cutie</td>
<td>$car_culoare</td>
<td>$car_descriere</td>
<td>$car_pret</td>
<td><img src='../poze_masini/$car_img1' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img2' style='width:50px; height:50px;border:groove #000'><td>
<td><img src='../poze_masini/$car_img3' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img4' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img5' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img6' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img7' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img8' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img9' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img10' style='width:50px; height:50px;border:groove #000'></td>
<td><img src='../poze_masini/$car_img11' style='width:50px; height:50px;border:groove #000'></td>
<td>
<a class=' btn btn-success' href='cosmetics_list.php?car_id=$car_id&action=delete'>Delete</a>
</td></tr>";
}

?>
</table>
</div></div>
<nav align="center">
  
<?php 
//counting paging

$paging=mysqli_query($connection,"select car_id,car_img1, car_name,car_pret from products");
$count=mysqli_num_rows($paging);

$a=$count/5;
$a=ceil($a);
echo "<bt>";echo "<bt>";
for($b=1; $b<=$a;$b++)
{
?> 
<ul class="pagination" style="border:groove #666">
<li><a class="label-info" href="cosmetics_list.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
<?php	
}
?>
</nav>
</div></div>
<?php include("include/js.php");?>
</body>
</html>