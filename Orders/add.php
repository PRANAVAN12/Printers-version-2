<html>
<head>

</head>

<body>
<?php
session_start();
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$categary = mysqli_real_escape_string($mysqli, $_POST['categary']);
	$quantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
		
	// checking empty fields
	if(empty($categary) || empty($quantity) || empty($description)) {
				
		if(empty($categary)) {
			echo "<font color='red'>categary field is empty.</font><br/>";
		}
		
		if(empty($quantity)) {
			echo "<font color='red'>quantity field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>descrip field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	

		$user_id=$_SESSION['UserId'];
		$query="INSERT INTO orders(categary,quantity,user_id,description) VALUES('$categary','$quantity','$user_id','$description')";
		$result = mysqli_query($mysqli, $query);
		if($result){
			//display success message
			echo "<font color='green'>Your Order added successfully.";
			echo "<br/><a href='./Memberview.php'>Wait For Admin Replys</a>";
		}else{
			echo "Insert failed";
		}
	
		
	}
}
?>
</body>
</html>
