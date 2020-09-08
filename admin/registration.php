<?php

  require_once 'dbcon.php';
  session_start();


 if(isset($_POST['registration'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $c_password = $_POST['c_password'];
 
 
  $photo = explode('.', $_FILES['photo']['name']);
  $photo = end($photo);
  $photo_name = $username.'.'.$photo;

  $input_error = array();



  if(empty($name)){
    $input_error['name'] = "The Name field is required.";
  }

  if(empty($email)){
    $input_error['email'] = "The Email field is required.";
  }

  if(empty($username)){
    $input_error['username'] = "The Username field is required.";
  }

  if(empty($password)){
    $input_error['password'] = "The Password field is required.";
  }

  if(empty($c_password)){
    $input_error['c_password'] = "The Confirm Password field is required.";
  }


  

   if(count($input_error) == 0){
     $email_check = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email';");
    if(mysqli_num_rows($email_check) == 0){
      $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username';");
      if(mysqli_num_rows($username_check) == 0){
        if(strlen($username) > 7){
           if(strlen($password) > 7 ){
                if($password == $c_password){
                  $password=md5($password);
                 
                  $query = "INSERT INTO `users`( `name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name', '$email', '$username', '$password', '$photo_name', 'inactive')";
                  $result = mysqli_query($link, $query);
                  if($result){
                    $_SESSION['data_insert_success'] = "Data Insert Successful!";
                    move_uploaded_file($_FILES['photo']['tmp_name'], 'images/'.$photo_name);
                    header('location: registration.php');

                  } else {
                    $_SESSION['data_insert_error'] = "Data Insert Error!";
                  }


                } else {
                  $password_not_match = "Password Doesn't Match!";
                }
           } else {
             $password_l = "Password Must Be More Than 7 Characters.";
           }
        } else {
              $username_l = "Username Must Be More Than 7 Characters.";
        }

    } else {
          $username_error = "This Username Already Exists";
    }
    
  }  else {
       $email_error = "This Email Address Already Exists";
   
     }
   
   
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
    <link rel="stylesheet" href="../css/style.css">



    <title>User Registration Form</title>
  </head>
  <body>
  <br>
     <div class="container">
        <h1>User Registration Form</h1>
        <?php if(isset($_SESSION['data_insert_success'])){ echo '<div class="alert alert-success">'.$_SESSION['data_insert_success'].'</div>';} ?>
        <?php if(isset($_SESSION['data_insert_error'])){ echo '<div class="alert alert-warning">'.$_SESSION['data_insert_error'].'</div>';} ?>

     <hr>
     <div class="row">
       <div class="col-md-12">
         <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="control-label col-sm-1">Name</label>
            <div class="col-sm-4">
              <input class="form-control" id="name" type="text" name="name" placeholder="Enter Your Name" value=" <?php if(isset($name)){ echo $name; } ?> " >
            </div>

            <label class="error"><?php if(isset($input_error['name'])){ echo $input_error['name']; } ?> </label>
          
          </div>
          <div class="form-group">
            <label for="email" class="control-label col-sm-1">Email</label>
            <div class="col-sm-4">
              <input class="form-control" id="email" type="email" name="email" placeholder="Enter Your Email" value=" <?php if(isset($email)){ echo $email; } ?> ">
            </div>

            <label class="error"><?php if(isset($input_error['email'])){ echo $input_error['email']; } ?> </label>
            <label class="error"><?php if(isset($email_error)){ echo $email_error; } ?> </label>

          </div>
          <div class="form-group">
            <label for="username" class="control-label col-sm-1">Username</label>
            <div class="col-sm-4">
              <input class="form-control" id="username" type="text" name="username" placeholder="Enter Your Username" value=" <?php if(isset($username)){ echo $username; } ?> ">
            </div>

            <label class="error"><?php if(isset($input_error['username'])){ echo $input_error['username']; } ?> </label>
            <label class="error"><?php if(isset($username_error)){ echo $username_error; } ?> </label>
            <label class="error"><?php if(isset($username_l)){ echo $username_l; } ?> </label>


          </div>
          <div class="form-group">
            <label for="password" class="control-label col-sm-1">Password</label>
            <div class="col-sm-4">
              <input class="form-control" id="password" type="password" name="password" placeholder="Enter Your Password" value=" <?php if(isset($password)){ echo $password; } ?> ">
            </div>

            <label class="error"><?php if(isset($input_error['password'])){ echo $input_error['password']; } ?> </label>
            <label class="error"><?php if(isset($password_l)){ echo $password_l; } ?> </label>

          </div>
          <div class="form-group">
            <label for="c_password" class="control-label col-sm-1">Confirm Password</label>
            <div class="col-sm-4">
              <input class="form-control" id="c_password" type="password" name="c_password" placeholder="Enter Your Confirm Password" value=" <?php if(isset($c_password)){ echo $c_password; } ?> ">
            </div>

            <label class="error"><?php if(isset($input_error['c_password'])){ echo $input_error['c_password']; } ?> </label>
            <label class="error"><?php if(isset($password_not_match)){ echo $password_not_match; } ?> </label>


          </div>
          <div class="form-group">
            <label for="photo" class="control-label col-sm-1">Photo</label>
            <div class="col-sm-4">
              <input id="photo" type="file" name="photo">
            </div>
          </div>
          <br>
          <div class="col-sm-4 col-sm offset-1">
           <input type="submit" value="Registration" name="registration" class="btn btn-primary">
          </div>
         </form>
       </div>
     </div>
     <br> <br>
     <p>If you have an account? then please <a href="login.php">Login</a></p>
     <hr>
     <footer>
      <p>Copyright &copy; <?= date('Y') ?> All Rights Reserved </p>
     </footer>
     </div>
  </body>
</html>
