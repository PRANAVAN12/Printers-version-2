<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM delivery ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
<h4 href="">AdminHome</h4>
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../tab/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tab/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tab/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tab/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tab/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tab/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../tab/css/util.css">
	<link rel="stylesheet" type="text/css" href="../tab/css/main.css">
<!--===============================================================================================-->
</head>

<a href="../Admin.php">Home</a>
<body>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
		<th>Name</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Actions</th>
		</tr>
						</thead>
						<tbody>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
		while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['UserName']."</td>";
		echo "<td>".$res['mobile']."</td>";
		echo "<td>".$res['Address']."</td>";	
			
	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	
		echo "</tr>";	
	}
	?>

</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>
<script src="../tab/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../tab/vendor/bootstrap/js/popper.js"></script>
	<script src="../tab/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../tab/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../tab/js/main.js"></script>
</html>
