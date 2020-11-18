<h1 class="text-primary"><i class="fas fa-user-edit"></i> Update User Profile <small> Update User Profile </small></h1>
<ol class="breadcrumb">
   <li><a href="index.php?page=dashboard"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
   <li><a href="index.php?page=all-users"><i class="fa fa-users"></i> All Users</a></li>
   <li class="active"><i class="fas fa-user-edit"></i> Update User Profile </li>
</ol>

<?php

$id = base64_decode($_GET['id']);



if(isset($_POST['update-user'])){

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "UPDATE `users` SET `name` = '$name' ,`username` = '$username' ,`email` = '$email' ,`password` = '$password'  WHERE `id` = '$id'";
  $result = mysqli_query($link, $query);

  if($result){
    //header('location: index.php?page=user-profile');
  }

}

$db_data = mysqli_query($link, "SELECT * FROM users WHERE `id` = $id");
$db_row = mysqli_fetch_assoc($db_data);


?>



<div class="row">
   <div class="col-sm-6">
     <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Name" id="name" class="form-control" required="" value="<?= $db_row['name'] ?>" >
        </div>

        <div class="form-group">
          <label for="roll">Username</label>
          <input type="text" name="username" placeholder="Username" id="username" class="form-control" required="" value="<?= $db_row['username'] ?>" >
        </div>

        <div class="form-group">
          <label for="city">Email</label>
          <input type="text" name="email" placeholder="Email" id="email" class="form-control" required="" value="<?= $db_row['email'] ?>" >
        </div>

        <div class="form-group">
          <label for="pcontact">Password</label>
          <input type="text" name="password" placeholder="Password" id="password" class="form-control" required="" value="<?= $db_row['password'] ?>" >
        </div>


        <div class="form-group">
          <input type="submit" value="Update User Profile" name="update-user" class="btn btn-primary pull-right">
        </div>

     </form>
   </div>
 </div>
