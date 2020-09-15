<?php
session_start();

if(!isset($_SESSION['user_login'])){
     header('location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
					<title>SIMS</title>
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


			    
						
              </head>
              
							<body>
								<nav class="navbar navbar-default">
									<div class="container-fluid">
										<!-- Brand and toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<a class="navbar-brand" href="index.php">Student Information & Management System</a>
										</div>
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li>
													<a href="logout.php">
														<i class="fa fa-user"></i> Welcome: Faizul Islam
													</a>
												</li>
												<li>
													<a href="logout.php">
														<i class="fa fa-user-plus"></i> Add User
													</a>
												</li>
												<li>
													<a href="logout.php">
														<i class="fa fa-user"></i> Profile
													</a>
												</li>
												<li>
													<a href="logout.php">
														<i class="fa fa-power-off"></i> Logout
													</a>
												</li>
											</ul>
										</div>
									</div>
                </nav>
                
								<div class="container-fluid">

									<div class="row">

										<div class="col-sm-3">
											<div class="list-group">
												<a href="#" class="list-group-item active">
													<i class="fas fa-tachometer-alt"></i> Dashboard
												</a>
												<a href="#" class="list-group-item">
													<i class="fa fa-user-plus"></i> Add Student
												</a>
												<a href="#" class="list-group-item">
													<i class="fa fa-users"></i> All Students
												</a>
												<a href="#" class="list-group-item">
													<i class="fa fa-users"></i> All Users
												</a>
											</div>
										</div>

                    

										<div class="col-sm-9">
											<div class="content">
												<h1 class="text-primary">
													<i class="fas fa-tachometer-alt"></i> Dashboard 
													<small>Statistics Overview</small>
												</h1>
												<ol class="breadcrumb">
													<li class="active">
														<i class="fas fa-tachometer-alt"></i> Dashboard
													</li>
												</ol>
												<div class="row">
													<div class="col-sm-4">
														<div class="panel panel-primary">
															<div class="panel-heading">
																<div class="row">
																	<div class="col-xs-3">
																		<i class="fa fa-users fa-5x"></i>
																	</div>
																	<div class="col-xs-9">
																		<div class="pull-right" style="font-size: 45px">10</div>
																		<div class="clearfix"></div>
																		<div class="pull-right">All Students</div>
																	</div>
																</div>
															</div>
															<a href="">
																<div class="panel-footer">
																	<span>All Students</span>
																	<span class="pull-right">
																		<i class="fas fa-arrow-circle-right"></i>
																	</span>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="panel panel-primary">
															<div class="panel-heading">
																<div class="row">
																	<div class="col-xs-3">
																		<i class="fa fa-users fa-5x"></i>
																	</div>
																	<div class="col-xs-9">
																		<div class="pull-right" style="font-size: 45px">10</div>
																		<div class="clearfix"></div>
																		<div class="pull-right">All Students</div>
																	</div>
																</div>
															</div>
															<a href="">
																<div class="panel-footer">
																	<span>All Students</span>
																	<span class="pull-right">
																		<i class="fas fa-arrow-circle-right"></i>
																	</span>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</div>
													<div class="col-sm-4">
														<div class="panel panel-primary">
															<div class="panel-heading">
																<div class="row">
																	<div class="col-xs-3">
																		<i class="fa fa-users fa-5x"></i>
																	</div>
																	<div class="col-xs-9">
																		<div class="pull-right" style="font-size: 45px">10</div>
																		<div class="clearfix"></div>
																		<div class="pull-right">All Students</div>
																	</div>
																</div>
															</div>
															<a href="">
																<div class="panel-footer">
																	<span>All Students</span>
																	<span class="pull-right">
																		<i class="fas fa-arrow-circle-right"></i>
																	</span>
																	<div class="clearfix"></div>
																</div>
															</a>
														</div>
													</div>
												</div>

                                               <hr>

											   <h3>New Students</h3>

											   <div class="table-responsive">

											   <table id="data" class="table table-hover table-bordered table-striped">
											      <thead>
												     <tr>
													 <th>ID</th>
													 <th>Name</th>
													 <th>Roll</th>
													 <th>City</th>
													 <th>Contact</th>
													 <th>Photo</th>
													 </tr>
												  </thead>
												  <tbody>
												    <tr>
												       <td>1</td>
													   <td>Faizul Islam</td>
													   <td>1810021</td>
													   <td>Rajshahi</td>
													   <td>01715577668</td>
													   <td><img style="width: 100px;" src="images/faizulece18.jpg" alt=""></td>
												    </tr>
													<tr>
												       <td>1</td>
													   <td>Faizul Islam</td>
													   <td>1810021</td>
													   <td>Rajshahi</td>
													   <td>01715577668</td>
													   <td><img style="width: 100px;" src="images/faizulece18.jpg" alt=""></td>
												    </tr>
													<tr>
												       <td>1</td>
													   <td>Faizul Islam</td>
													   <td>1810021</td>
													   <td>Rajshahi</td>
													   <td>01715577668</td>
													   <td><img style="width: 100px;" src="images/faizulece18.jpg" alt=""></td>
												    </tr>
												  </tbody>
											   </table>

											  </div>

											</div>
										</div>
									</div>
								</div>
                                 
                                <br><br><br><br><br>

								<footer class="footer-area">
									<p>Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</p>
                               </footer>


							</body>
						</html>