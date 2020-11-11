<?php

require_once './dbcon.php';

session_start();

if(isset($_SESSION['student_login'])){
  header('location: systemstudent.php');
}

if(isset($_POST['login'])) {
      
  $studentname = $_POST['studentname'];
  $password = $_POST['password'];


  $studentname_check = mysqli_query($link, "SELECT * FROM `student` WHERE `studentname` = '$studentname'");
  if(mysqli_num_rows($studentname_check) > 0){
   $row = mysqli_fetch_assoc($studentname_check);

   if($row['password'] == md5($password)){
    if($row['status'] == 'active'){
      $_SESSION['student_login'] = $studentname;
      header('location: systemstudent.php');
    } else {
      $status_inactive = "Your Status Is Inactive";
    }
   } else {
       $wrong_password = "The Password Is Wrong";
   }


  } else {
       $username_not_found = "This Username Is Not Found";
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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">


    <title>SIMS</title>
  </head>
  <body>

  <header style="width:100%; height:100px; background:#3CA9E8;">
   </header>
  
   <div class="container animated shake">
     <br> <br>
     <h1 class="text-center">Student Information & Management System</h1> <br>

     <div class="row">
      <div class="col-sm-4 col-sm offset-4">
      <div>
      <h2 class="text-center">Student Login Panel</h2>
      <br> <br>
         <form action="login.php" method="POST">
           <div>
              <input type="text" placeholder="Student's Name" name="studentname" required="" class="form-control" value="<?php if(isset($studentname)) { echo $studentname; } ?>">
           </div>
           <br>
           <div>
              <input type="password" placeholder="Password" name="password" required="" class="form-control" value="<?php if(isset($password)) { echo $password; } ?>">
           </div>
           <br>
           <div>
           <input style="float:right; width:75px; height:40px;" type="submit" value="Login" name="login" class="btn btn-info pull-right">
           <a href="../"><input style="width:75px; height:40px;" value="Back" class="btn btn-info pull-left"></a>
           </div>
         </form>
         </div>
      </div>
     </div>
     <br>
     <?php if(isset($username_not_found)) { echo '<div class="alert alert-danger col-sm-4 col-sm offset-4">'.$username_not_found.'</div>'; } ?>
     <?php if(isset($wrong_password)) { echo '<div class="alert alert-danger col-sm-4 col-sm offset-4">'.$wrong_password.'</div>'; } ?>
     <?php if(isset($status_inactive)) { echo '<div class="alert alert-danger col-sm-4 col-sm offset-4">'.$status_inactive.'</div>'; } ?>

   </div>

   <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:49px;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>

  </body>
</html>
