<?php
session_start();
//session_regenerate_id(true);
include("connection.php");
$check=0;

if(isset($_POST['submit']))
{
$admin_name = $_POST['admin_name'];
$admin_pass = $_POST['admin_pass'];

$query=mysqli_query($connection,"select admin_id from admin where admin_name='$admin_name' and admin_pass='$admin_pass'")or die ("query 1 incorrect.......");

list($admin_id)=mysqli_fetch_array($query);

$_SESSION['admin_id']=$admin_id;
header("location: index.php");

$check=1;

if($check==0)
{
$check=2;
}

mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<title>Admin Page</title>
</head>
<body>
<div class="container page-header well" align="center">
<img src="../images/logo.png">
<h1 align="center">Bun venit &nbsp;&nbsp;
Admin Login</h1>
<div align="center">
<form action="login.php" method="post" id="login" name="login" enctype="multipart/form-data">
<div class="form-group">
<input type="text" style="font-size:18px; width:200px" class="input-lg" name="admin_name" id="admin_name" placeholder="User-Name" required autofocus>
</div>
<div class="form-group">
<input type="password" class="input-lg" name="admin_pass" style="font-size:18px; width:200px" id="admin_pass" placeholder="Password" required>
 </div>
 <div class="form-group">
<button class="btn btn-large btn-lg btn-success" type="submit" name="submit" id="submit">Log in</button>
</div>

</form>
</div>
</div>
</body>
</html>