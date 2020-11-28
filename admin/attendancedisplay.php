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

  <title>Attendance System</title>
</head>
<body>
<header style="width:100%; height:100px; background:#3CA9E8;">
   </header>







<div class="table-responsive">

    <table id="data" class="table table-hover table-bordered table-striped">

	    <thead>

			
			<tr>
      <th scope="col">
      <label style="width:100px; text-align:center;" for="Roll"><h3>Roll No.</h3></label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;" for="Course"><h3>Course</h3></label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-1</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-2</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-3</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-4</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-5</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-6</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-7</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-8</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-9</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-10</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-11</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-12</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-13</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-14</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-15</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-16</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-17</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-18</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-19</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-20</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-21</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-22</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-23</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-24</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-25</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-26</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-27</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-28</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-29</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-30</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-31</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-32</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-33</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-34</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-35</label>
      </th>
	  <th scope="col">
      <label style="width:120px; text-align:center;">Day-36</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-37</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-38</label>
      </th>
      <th scope="col">
      <label style="width:120px; text-align:center;">Day-39</label>
      </th>
	  <th>
	  <label style="width:120px; text-align:center;">Action</label>
	   </th> 
      </tr>
			

		</thead>

		<tbody>

		<?php
		    $db_sinfo = mysqli_query($link, "SELECT * FROM `attendance` ");
			while($row = mysqli_fetch_assoc($db_sinfo)){ 
		?>
												  

			<tr>

				<td><?php echo $row['Roll']; ?></td>
				<td><?php echo $row['Course']; ?></td>
				<td><?php echo $row['d_one']; ?></td>
				<td><?php echo $row['d_two']; ?></td>
				<td><?php echo $row['d_three']; ?></td>
				<td><?php echo $row['d_four']; ?></td>
				<td><?php echo $row['d_five']; ?></td>
				<td><?php echo $row['d_six']; ?></td>
				<td><?php echo $row['d_seven']; ?></td>
				<td><?php echo $row['d_eight']; ?></td>
				<td><?php echo $row['d_nine']; ?></td>
				<td><?php echo $row['d_ten']; ?></td>
				<td><?php echo $row['d_eleven']; ?></td>
				<td><?php echo $row['d_twelve']; ?></td>
				<td><?php echo $row['d_thirteen']; ?></td>
				<td><?php echo $row['d_fourteen']; ?></td>
				<td><?php echo $row['d_fifteen']; ?></td>
				<td><?php echo $row['d_sixteen']; ?></td>
				<td><?php echo $row['d_seventeen']; ?></td>
				<td><?php echo $row['d_eighteen']; ?></td>
				<td><?php echo $row['d_nineteen']; ?></td>
				<td><?php echo $row['d_twenty']; ?></td>
				<td><?php echo $row['d_twentyone']; ?></td>
				<td><?php echo $row['d_twentytwo']; ?></td>
				<td><?php echo $row['d_twentythree']; ?></td>
				<td><?php echo $row['d_twentyfour']; ?></td>
				<td><?php echo $row['d_twentyfive']; ?></td>
				<td><?php echo $row['d_twentysix']; ?></td>
				<td><?php echo $row['d_twentyseven']; ?></td>
				<td><?php echo $row['d_twentyeight']; ?></td>
				<td><?php echo $row['d_twentynine']; ?></td>
				<td><?php echo $row['d_thirty']; ?></td>
				<td><?php echo $row['d_thirtyone']; ?></td>
				<td><?php echo $row['d_thirtytwo']; ?></td>
				<td><?php echo $row['d_thirtythree']; ?></td>
				<td><?php echo $row['d_thirtyfour']; ?></td>
				<td><?php echo $row['d_thirtyfive']; ?></td>
				<td><?php echo $row['d_thirtysix']; ?></td>
				<td><?php echo $row['d_thirtyseven']; ?></td>
				<td><?php echo $row['d_thirtyeight']; ?></td>
				<td><?php echo $row['d_thirtynine']; ?></td>
			    <td><a href="attendanceupdate.php?page=update-student&Roll=<?php echo base64_encode($row['Roll']); ?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>Edit</a>
                </td>
      
			</tr>

		<?php
			} 
		?>
													
		</tbody>







	</table>

</div>






<footer style="width:100%; height:100px; background:#3CA9E8; text-align:center; position:absolute; bottom:0;">
        <h6 style="padding-top:25px; color: white;">Copyright &COPY; 2020 Student Information & Management System. All Rights Are Reserved.</h6> 
     </footer>

</body>
</html>




