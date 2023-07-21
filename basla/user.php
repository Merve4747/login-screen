<?php
include "connect.php";
if(isset($_GET["addid"])){
  $id=$_GET["addid"];}
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="insert into `crud` (name,email,password)
  values('$name','$email','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    //echo "Veri girişi başarılı";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post" class="nur">
  <div class="form-group">
    <h3><b>ADD USER</b></h3>
    <label>Name</label>
    <input type="text" required class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" required class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="text" required class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  </div>


  <button type="submit" class="btn1" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>