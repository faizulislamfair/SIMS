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
  
   <div class="container animated shake">
     <h1 class="text-center">Student Information & Management System</h1> <br>

     <div class="row">
      <div class="col-sm-4 col-sm offset-4">
      <h2 class="text-center">Admin Login Form</h2>
         <form action="login.php" method="POST">
           <div>
              <input type="text" placeholder="Username" name="username" required="" class="form-control">
           </div>
           <div>
              <input type="password" placeholder="Password" name="password" required="" class="form-control">
           </div>
           <br>
           <div>
           <input style="float:right;" type="submit" value="Login" name="login" class="btn btn-info pull-right">
           </div>
         </form>
      </div>
     </div>
   </div>

  </body>
</html>
