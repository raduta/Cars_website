<?php 
$db=mysqli_connect("localhost","root","","cars");

function getCar(){

    global $db;

    $get_cars="select * from car order by 1 DESC LIMIT 0,8";
    $run_car=mysqli_query($db,$get_cars);

    while($row_cars=mysqli_fetch_array($run_car))
}




?>