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
<!-- Bootstrap -->
          
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
					<link rel="stylesheet" type="text/css" href="../fonts/fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/all.min.css">
					<link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
                    <link rel="stylesheet" href="../css/style.css">
					

                    <script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
					<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
					<script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
					<script type="text/javascript" src="../js/script.js"></script>

  <title>Class Test Archive</title>
</head>
<body>
<header style="width:100%; height:100px; background:#3CA9E8;">
   </header>

   <br> <br>

   
<?php

if(isset($_POST['semester'])){

  $roll = $_POST['Roll'];
  $cgpa = $_POST['CGPA'];
  
  $query = "INSERT INTO `semester`(`Roll`, `CGPA`) VALUES ('$roll', '$cgpa')";

  $result = mysqli_query($link, $query);

  if($result){
   $success = "Data Insertion Successful!";
   header('location: semesterinsert.php'); 
  } else {
    $error = "Wrong!";
  }

}


?>

<div class="row">

   <?php if(isset($success)){ echo '<p class="alert alert-success col-sm-6">'.$success.'</p>';} ?>
   <?php if(isset($error)){ echo '<p class="alert alert-danger col-sm-6">'.$error.'</p>'; } ?>

</div>


<div class="row">
   <div class="col-sm-6 ">
     <form action="" method="POST" enctype="multipart/form-data">

        <table class="table table-striped offset-6">
  <thead>
    <tr>
      <th scope="col">
      <label style="width:100px; text-align:center;" for="Roll">Roll No.</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;" for="CGPA">CGPA</label>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
          <input style="width:100px; margin-left:10px;" type="text" name="Roll" placeholder="Roll" class="form-control" required="" >
      </td>
      <td>
          <input style="width:120px; margin-left:10px;" type="text" name="CGPA" placeholder="CGPA" class="form-control" required="" >
      </td>
    </tr>
  </tbody>
</table>
        <div class="form-group">
          <input type="submit" value="Add Grade" name="semester" class="btn btn-primary pull-right">
        </div>

     </form>
   </div>
</div>


  
   <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:49px; position:absolute; bottom:0;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>
</body>
</html>