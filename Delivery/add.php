<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$UserName = mysqli_real_escape_string($mysqli, $_POST['UserName']);
	$mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
	$Address = mysqli_real_escape_string($mysqli, $_POST['Address']);
	
		
	// checking empty fields
	if(empty($UserName) || empty($mobile) || empty($Address)) {
				
		if(empty($UserName)) {
			echo "<font color='red'>categary field is empty.</font><br/>";
		}
		
		if(empty($mobile)) {
			echo "<font color='red'>quantity field is empty.</font><br/>";
		}
		
		if(empty($Address)) {
			echo "<font color='red'>descrip field is empty.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO delivery (UserName,mobile,Address) VALUES('$UserName','$mobile','$Address')");
		
		//display success message
		echo "<font color='green'>Thank You For Purchasing ";
		echo "<br/><a href='../MemberView.php'>Click to go Home</a>";
	}
}
?>
</body>
</html>
