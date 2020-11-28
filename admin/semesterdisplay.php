

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

  <title>Semester Final</title>
</head>
<body>
<header style="width:100%; height:100px; background:#3CA9E8;">
   </header>

   <br> <br>

   
<div class="table-responsive">

<table id="data" class="table table-hover table-bordered table-striped">

  <thead>

  <tr>
    <th>Roll No.</th>
    <th>CGPA</th>
    <th>Action</th>
  </tr>

</thead>

<tbody>

<?php


    $db_sinfos = mysqli_query($link, "SELECT * FROM `semester` ");
   $rows = mysqli_fetch_all($db_sinfos, MYSQLI_ASSOC);
   $number_of_rows = count($rows);
   //echo $number_of_rows; 

   $cgpa_lowest=20;
   $cgpa_highest=0;

   foreach($rows as $row){
     if($row['CGPA'] > $cgpa_highest){
        $cgpa_highest = $row['CGPA'];
     }
     if($row['CGPA'] < $cgpa_lowest){
        $cgpa_lowest = $row['CGPA'];
     }  
   }

  foreach($rows as $row){


?>
                      

  <tr>
    <td><?php echo $row['Roll']; ?></td>
    <td><?php echo $row['CGPA'] . ($cgpa_highest == $row['CGPA'] ? "( Highest )" : "" ) . (($cgpa_lowest == $row['CGPA'] && $cgpa_lowest!=$cgpa_highest) ? "( Lowest )" : "" );  ?></td>
    <td>
       <a href="semesterupdate.php?page=update-student&Roll=<?php echo base64_encode($row['Roll']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
    </td>
  </tr>

<?php
  } 
?>
                      
</tbody>

</table>

</div>


   <br> <br>


  
   <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:49px; position:absolute; bottom:0;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>
</body>
</html>