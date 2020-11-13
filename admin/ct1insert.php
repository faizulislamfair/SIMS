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

if(isset($_POST['add-student'])){

  $name = $_POST['name'];
  $roll = $_POST['roll'];
  $city = $_POST['city'];
  $pcontact = $_POST['pcontact'];
  $class = $_POST['class'];

  $picture = explode('.',$_FILES['picture']['name']);
  $picture_ex = end($picture);

  $picture_name = $roll.'.'.$picture_ex;

  $query = "INSERT INTO `student_info`(`name`, `roll`, `class`, `city`, `pcontact`, `photo`) VALUES ('$name', '$roll', '$class', '$city', '$pcontact', '$picture_name')";

  $result = mysqli_query($link, $query);

  if($result){
    $success = "Data Insertion Successful!";
    move_uploaded_file($_FILES['picture']['tmp_name'], 'student_images/'.$picture_name);
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
   <div class="col-sm-6">
     <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name">Student Name</label>
          <input type="text" name="name" placeholder="Student Name" id="name" class="form-control" required="" >
        </div>

        <div class="form-group">
          <label for="roll">Student Roll</label>
          <input type="text" name="roll" placeholder="Roll" id="roll" class="form-control" pattern="[0-9]{7}" required="" >
        </div>

        <div class="form-group">
          <label for="city">City</label>
          <input type="text" name="city" placeholder="City" id="city" class="form-control" required="" >
        </div>

        <div class="form-group">
          <label for="pcontact">PContact</label>
          <input type="text" name="pcontact" placeholder="01*********" id="pcontact" class="form-control" pattern="01[1|3|5|6|7|8|9][0-9]{8}" required="" >
        </div>

        <div class="form-group">
          <label for="class">Class</label>
          <select id="class" class="form-control" name="class" required="" >
            <option value="">Select</option>
            <option value="1st">1st</option>
            <option value="2nd">2nd</option>
            <option value="3rd">3rd</option>
            <option value="4th">4th</option>
          </select>
        </div>

        <div class="form-group">
          <label for="picture">Picture</label>
          <input type="file" name="picture" id="picture" required="" >
        </div>

        <div class="form-group">
          <input type="submit" value="Add Student" name="add-student" class="btn btn-primary pull-right">
        </div>

     </form>
   </div>
</div>


  
   <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:49px; position:absolute;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>
</body>
</html>