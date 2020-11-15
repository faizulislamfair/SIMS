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

   
<div class="table-responsive">

<table id="data" class="table table-hover table-bordered table-striped">

  <thead>

  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll</th>
    <th>Class</th>
    <th>City</th>
    <th>Contact</th>
    <th>Photo</th>
      <th>Action</th>
  </tr>

</thead>

<tbody>

<?php
    $db_sinfo = mysqli_query($link, "SELECT * FROM `student_info` ");
  while($row = mysqli_fetch_assoc($db_sinfo)){ 
?>
                      

  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo ucwords($row['name']); ?></td>
    <td><?php echo $row['roll']; ?></td>
    <td><?php echo $row['class']; ?></td>
      <td><?php echo ucwords($row['city']); ?></td>
    <td><?php echo $row['pcontact']; ?></td>
    <td><img style="width: 100px;" src="student_images/<?php echo $row['photo']; ?>" alt="Student's Image"></td>
    <td>
       <a href="index.php?page=update-student&id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
    </td>
  </tr>

<?php
  } 
?>
                      
</tbody>

</table>

</div>


   <br> <br>


  
   <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:49px; position:absolute;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>
</body>
</html>