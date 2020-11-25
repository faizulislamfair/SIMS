<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>SIMS</title>
  </head>
  <body>

  <header style="width:100%; height:100px; background:#3CA9E8;">
   </header>

    <div class="container">
      <br>
      
      <a style="float:right;" class="btn btn-primary" href="systemoredit.php">Back</a>
      <br> <br>
      <h1 class="text-center">Student Information & Management System</h1>
      
    <br> <br>
    <div class="row text-center">
      <div class="col-sm-4 col-sm offset-4">
        <form action="" method="post">
          <table class="table table-bordered">
            <tr>
              <td colspan="2"><label>Student Information</label></td>
            </tr>
            <!-- <tr>
              <td><label for="choose">Choose Year</label></td>
              <td>
                <select class="form-control" id="choose" name="choose">
                  <option value="">Select</option>
                  <option value="1st">1st Year</option>
                  <option value="2nd">2nd Year</option>
                  <option value="3rd">3rd Year</option>
                  <option value="4th">4th Year</option>
                </select>
              </td>
            </tr> -->
            <tr>
              <td><label for="roll">Roll</label></td>
              <td><input class="form-control" type="text" name="roll" pattern="[0-9]{7}" placeholder="Roll"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="show_info" value="Show Info"></td>
            </tr>
          </table>
        </form>

      </div>
    </div>

   <?php
     
     require_once 'dbcon.php';

    if(isset($_POST['show_info'])) {

      //$choose = $_POST['choose'];
      $roll = $_POST['roll'];

      $result = mysqli_query($link, "SELECT * FROM `student_info` WHERE `roll` = '$roll'");

      if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        ?>

<div class="row">
      <div class="col-sm-6 col-sm offset-3">
        <table class="table table-bordered">
          <tr>
            <td rowspan="4">
              <img src="student_images/<?= $row['photo'] ?>"
              class="img-thumbnail" style="width: 150px;"
               alt="Student's Image">
            </td>
            <td>Name</td>
            <td><?= ucwords($row['name']); ?></td>
          </tr>
          <tr>
            
            <td>Roll</td>
            <td><?= $row['roll'] ?></td>
          </tr>
          <tr>
            
            <td>Class</td>
            <td><?= $row['class'] ?></td>
          </tr>
          <tr>
            
            <td>City</td>
            <td><?= ucwords($row['city']); ?></td>
          </tr>
        </table>
      </div>
    </div>


     <?php

      } else {

        ?>

        <script type="text/javascript">
          alert('Data Not Found');
        </script>

      <?php }} ?>

    </div>






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

//foreach($rows as $row){


?>


    <!-- <br> <br>
    <div class="row text-center">
      <div class="col-sm-4 col-sm offset-4">
        <form action="" method="post">
          <table class="table table-bordered">
            <tr>
              <td colspan="2"><label>Student Information</label></td>
            </tr>
            <tr>
              <td><label for="Roll">Roll</label></td>
              <td><input class="form-control" type="text" name="Roll" placeholder="Roll"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="shows_info" value="Show Info"></td>
            </tr>
          </table>
        </form>

      </div>
    </div> -->

   <?php
     
     require_once 'dbcon.php';

    if(isset($_POST['show_info'])) {

      $Roll = $_POST['roll'];

      $results = mysqli_query($link, "SELECT * FROM `student_marks1` WHERE `Roll` = '$Roll'");

      if(mysqli_num_rows($results) == 1){
        $row = mysqli_fetch_assoc($results);
        ?>

<div class="row">
      <div class="col-sm-6 col-sm offset-3">
        <table class="table table-bordered">
          
        <tr>
        <td>Roll No.</td>
        <td><?php echo $row['Roll']; ?></td>
        </tr>

  <tr>
    <td>Electrical Machines</td>
    <td><?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?></td>
  </tr>


    <tr>
    <td>Data Structure & Algorithms</td>
    <td><?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>


    <tr>
    <td>Digital Techniques</td>
    <td><?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Mathematics</td>
    <td><?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Chemistry</td>
    <td><?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>
    

  </tr>

  
<?php
  } 
?>
       

        </table>
      </div>
    </div>


     <?php

      } else {

        ?>

        <!-- <script type="text/javascript">
          alert('Data Not Found');
        </script> -->

      <?php } ?>

    </div>



    <?php


$db_sinfos = mysqli_query($link, "SELECT * FROM `student_marks2` ");
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

//foreach($rows as $row){


?>


    <!-- <br> <br>
    <div class="row text-center">
      <div class="col-sm-4 col-sm offset-4">
        <form action="" method="post">
          <table class="table table-bordered">
            <tr>
              <td colspan="2"><label>Student Information</label></td>
            </tr>
            <tr>
              <td><label for="Roll">Roll</label></td>
              <td><input class="form-control" type="text" name="Roll" placeholder="Roll"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="shows_info" value="Show Info"></td>
            </tr>
          </table>
        </form>

      </div>
    </div> -->

   <?php
     
     require_once 'dbcon.php';

    if(isset($_POST['show_info'])) {

      $Roll = $_POST['roll'];

      $results = mysqli_query($link, "SELECT * FROM `student_marks2` WHERE `Roll` = '$Roll'");

      if(mysqli_num_rows($results) == 1){
        $row = mysqli_fetch_assoc($results);
        ?>

<div class="row">
      <div class="col-sm-6 col-sm offset-3">
        <table class="table table-bordered">
          
        <tr>
        <td>Roll No.</td>
        <td><?php echo $row['Roll']; ?></td>
        </tr>

  <tr>
    <td>Electrical Machines</td>
    <td><?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?></td>
  </tr>


    <tr>
    <td>Data Structure & Algorithms</td>
    <td><?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>


    <tr>
    <td>Digital Techniques</td>
    <td><?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Mathematics</td>
    <td><?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Chemistry</td>
    <td><?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>
    

  </tr>

  
<?php
  } 
?>
       

        </table>
      </div>
    </div>


     <?php

      } else {

        ?>

        <!-- <script type="text/javascript">
          alert('Data Not Found');
        </script> -->

      <?php } ?>

    </div>




    <?php


$db_sinfos = mysqli_query($link, "SELECT * FROM `student_marks3` ");
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

//foreach($rows as $row){


?>


    <!-- <br> <br>
    <div class="row text-center">
      <div class="col-sm-4 col-sm offset-4">
        <form action="" method="post">
          <table class="table table-bordered">
            <tr>
              <td colspan="2"><label>Student Information</label></td>
            </tr>
            <tr>
              <td><label for="Roll">Roll</label></td>
              <td><input class="form-control" type="text" name="Roll" placeholder="Roll"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="shows_info" value="Show Info"></td>
            </tr>
          </table>
        </form>

      </div>
    </div> -->

   <?php
     
     require_once 'dbcon.php';

    if(isset($_POST['show_info'])) {

      $Roll = $_POST['roll'];

      $results = mysqli_query($link, "SELECT * FROM `student_marks3` WHERE `Roll` = '$Roll'");

      if(mysqli_num_rows($results) == 1){
        $row = mysqli_fetch_assoc($results);
        ?>

<div class="row">
      <div class="col-sm-6 col-sm offset-3">
        <table class="table table-bordered">
          
        <tr>
        <td>Roll No.</td>
        <td><?php echo $row['Roll']; ?></td>
        </tr>

  <tr>
    <td>Electrical Machines</td>
    <td><?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?></td>
  </tr>


    <tr>
    <td>Data Structure & Algorithms</td>
    <td><?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>


    <tr>
    <td>Digital Techniques</td>
    <td><?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Mathematics</td>
    <td><?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Chemistry</td>
    <td><?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>
    

  </tr>

  
<?php
  } 
?>
       

        </table>
      </div>
    </div>


     <?php

      } else {

        ?>

        <!-- <script type="text/javascript">
          alert('Data Not Found');
        </script> -->

      <?php } ?>

    </div>










    <?php


$db_sinfos = mysqli_query($link, "SELECT * FROM `student_marks4` ");
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

//foreach($rows as $row){


?>


    <!-- <br> <br>
    <div class="row text-center">
      <div class="col-sm-4 col-sm offset-4">
        <form action="" method="post">
          <table class="table table-bordered">
            <tr>
              <td colspan="2"><label>Student Information</label></td>
            </tr>
            <tr>
              <td><label for="Roll">Roll</label></td>
              <td><input class="form-control" type="text" name="Roll" placeholder="Roll"></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="shows_info" value="Show Info"></td>
            </tr>
          </table>
        </form>

      </div>
    </div> -->

   <?php
     
     require_once 'dbcon.php';

    if(isset($_POST['show_info'])) {

      $Roll = $_POST['roll'];

      $results = mysqli_query($link, "SELECT * FROM `student_marks4` WHERE `Roll` = '$Roll'");

      if(mysqli_num_rows($results) == 1){
        $row = mysqli_fetch_assoc($results);
        ?>

<div class="row">
      <div class="col-sm-6 col-sm offset-3">
        <table class="table table-bordered">
          
        <tr>
        <td>Roll No.</td>
        <td><?php echo $row['Roll']; ?></td>
        </tr>

  <tr>
    <td>Electrical Machines</td>
    <td><?php echo $row['Electrical_Machines'] . ($eletrical_highest == $row['Electrical_Machines'] ? "( Highest )" : "" ) . (($eletrical_lowest == $row['Electrical_Machines'] && $eletrical_lowest!=$eletrical_highest) ? "( Lowest )" : "" );  ?></td>
  </tr>


    <tr>
    <td>Data Structure & Algorithms</td>
    <td><?php echo $row['Data_Structure_&_Algorithms'] . ($data_highest == $row['Data_Structure_&_Algorithms'] ? "( Highest )" : "" ) . (($data_lowest == $row['Data_Structure_&_Algorithms'] && $data_lowest!=$data_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>


    <tr>
    <td>Digital Techniques</td>
    <td><?php echo $row['Digital_Techniques'] . ($tech_highest == $row['Digital_Techniques'] ? "( Highest )" : "" ) . (($tech_lowest == $row['Digital_Techniques'] && $tech_lowest!=$tech_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Mathematics</td>
    <td><?php echo $row['Mathematics'] . ($math_highest == $row['Mathematics'] ? "( Highest )" : "" ) . (($math_lowest == $row['Mathematics'] && $math_lowest!=$math_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>

    <tr>
    <td>Chemistry</td>
    <td><?php echo $row['Chemistry'] . ($chem_highest == $row['Chemistry'] ? "( Highest )" : "" ) . (($chem_lowest == $row['Chemistry'] && $chem_lowest!=$chem_highest) ? "( Lowest )" : "" );  ?></td>
    </tr>
    

  </tr>

  
<?php
  } 
?>
       

        </table>
      </div>
    </div>


     <?php

      } else {

        ?>

        <!-- <script type="text/javascript">
          alert('Data Not Found');
        </script> -->

      <?php } ?>

    </div>





    <footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; margin-top:90px">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
