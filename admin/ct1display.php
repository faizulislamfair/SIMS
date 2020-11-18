

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
    <th>Roll No.</th>
    <th>Electrical Machines</th>
    <th>Data Structure & Algorithms</th>
    <th>Digital Techniques</th>
    <th>Mathematics</th>
    <th>Chemistry</th>
    <th>Action</th>
  </tr>

</thead>

<tbody>

<?php


    $db_sinfos = mysqli_query($link, "SELECT * FROM `student_marks1` ");
   $rows = mysqli_fetch_all($db_sinfos, MYSQLI_ASSOC);
   $number_of_rows = count($rows);
   //echo $number_of_rows; 

   $eletrical_lowest=20;
   $eletrical_highest=0;
   $data_lowest=20;
   $data_highest=0;
   $tech_lowest=20;
   $tech_highest=0;
   $math_lowest=20;
   $math_highest=0;
   $chem_lowest=20;
   $chem_highest=0;

   foreach($rows as $row){
     if($row['Electrical_Machines'] > $eletrical_highest){
        $eletrical_highest = $row['Electrical_Machines'];
     }
     if($row['Electrical_Machines'] < $eletrical_lowest){
        $eletrical_lowest = $row['Electrical_Machines'];
     }
     if($row['Data_Structure_&_Algorithms'] > $data_highest){
        $data_highest = $row['Data_Structure_&_Algorithms'];
     }
     if($row['Data_Structure_&_Algorithms'] < $data_lowest){
      $data_lowest = $row['Data_Structure_&_Algorithms'];
   }
     if($row['Digital_Techniques'] > $tech_highest){
        $tech_highest = $row['Digital_Techniques'];
     }
     if($row['Digital_Techniques'] < $tech_lowest){
        $tech_lowest = $row['Digital_Techniques'];
     }
     
     if($row['Mathematics'] > $math_highest){
        $math_highest = $row['Mathematics'];
     }
     if($row['Mathematics'] < $math_lowest){
        $math_lowest = $row['Mathematics'];
     }
     if($row['Chemistry'] > $chem_highest){
        $chem_highest = $row['Chemistry'];
     }
     if($row['Chemistry'] < $chem_lowest){
        $chem_lowest = $row['Chemistry'];
     }
     
     
   }

  foreach($rows as $row){


?>
                      

  <tr>
    <td><?php echo $row['Roll']; ?></td>
    <td><?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?></td>

    <td><?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?></td>

    <td>
       <a href="ct1update.php?page=update-student&Roll=<?php echo base64_encode($row['Roll']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> Edit</a>
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