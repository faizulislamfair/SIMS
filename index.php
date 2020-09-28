<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>SIMS</title>
  </head>
  <body>
    <div class="container">
      <br>
      <a style="float:right;" class="btn btn-primary" href="admin/login.php">Login</a>
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
            <tr>
              <td><label for="choose">Choose Year</label></td>
              <td>
                <select class="form-control" id="choose" name="choose">
                  <option value="">Select</option>
                  <option value="1">1st Year</option>
                  <option value="2">2nd Year</option>
                  <option value="3">3rd Year</option>
                  <option value="4">4th Year</option>
                </select>
              </td>
            </tr>
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

    if(isset($_POST['show_info'])) {

      ?>

<div class="row">
      <div class="col-sm-8 col-sm offset-2">
        <table class="table table-bordered">
          <tr>
            <td rowspan="4">
              <img src="admin/student_images/1810021.jpg"
              class="img-thumbnail" style="width: 150px;"
               alt="Student's Image">
            </td>
            <td>Name</td>
            <td>S.M.Faizul Islam Fair</td>
          </tr>
          <tr>
            
            <td>Roll</td>
            <td>1810021</td>
          </tr>
          <tr>
            
            <td>Class</td>
            <td>2nd</td>
          </tr>
          <tr>
            
            <td>City</td>
            <td>Rajshahi</td>
          </tr>
        </table>
      </div>
    </div>

      <?php
    }

    ?>

    

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
