<?php
session_start();
require_once './dbcon.php';
if(!isset($_SESSION['user_login'])){
     header('location: login.php');
}


?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">

  <title>Login Panels</title>
</head>
<body>
<header style="width:100%; height:100px; background:#3CA9E8;">
   </header>

   <br> <br>

   <h1 class="text-center" style="margin-right:15px">Student Information & Management System</h1>
   
   <br> <br>
   
   <div class="row offset-3">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title offset-3">View System</h4> 
        <br>
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
        <a href="systemadmin.php" style="width:100px;" class="btn btn-primary offset-4">View</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h4 class="card-title offset-3">Edit System</h4> 
        <br>
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
        <a href="index.php" style="width:100px;" class="btn btn-primary offset-4">Edit</a>
      </div>
    </div>
  </div>
</div>


  
   <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:49px; position:absolute; bottom:0;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>
</body>
</html>