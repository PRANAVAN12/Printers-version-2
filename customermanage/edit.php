<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$UserName = mysqli_real_escape_string($mysqli, $_POST['UserName']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$Mobile = mysqli_real_escape_string($mysqli, $_POST['Mobile']);	
	$Password= mysqli_real_escape_string($mysqli, $_POST['Password']);	

	// checking empty fields
	if(empty($UserName) || empty($Email) || empty($Mobile)|| empty($Password)) {	
			
		if(empty($UserName)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($Email)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		
		if(empty($Mobile)) {
			echo "<font color='red'>Mobile field is empty.</font><br/>";
		}
		if(empty($Password)) {
			echo "<font color='red'>BloodGroup field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET UserName='$UserName',Email='$Email',Mobile='$Mobile' ,Password='$Password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
		}
}
?>
<?php
//getting id from url
if(sizeof($_GET)!=0){
	$id = $_GET['id'];
	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
	
	while($res = mysqli_fetch_array($result))
	{
		$UserName = $res['UserName'];
		$Email = $res['Email'];
		$Mobile = $res['Mobile'];
		$Password = $res['Password'];
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../frm/css/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="../frm/css/style.css"/>
</head>
<body class="form-v9">
	<div class="page-content">
		<div class="form-v9-content" style="background-image: url('../frm/images/form-v9.jpg')">
			<form class="form-detail" name="form1" method="post" action="edit.php">
				<h2>Update</h2>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="UserName" value="<?php echo $UserName;?>" placeholder="UserName" required>
					</div>
					<div class="form-row">
						<input type="text" name="Email" value="<?php echo $Email;?>" placeholder="Email" required >
					</div>
				</div>
				<div class="form-row">
					<div class="form-row">
						<input type="text"  name="Mobile" value="<?php echo $Mobile;?>" class="input-text" placeholder="mobile" required>
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text"   name="Password" value="<?php echo $Password;?>" class="input-text" placeholder="Password" required>
					</div>
				</div>
				<div class="form-row-total">
					<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
					<input type="submit"  class="register" name="update" value="Update">
				</div>
			</form>
		</div>
	</div>
</body>
</html>