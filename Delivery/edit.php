<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$UserName = mysqli_real_escape_string($mysqli, $_POST['UserName']);
	$mobile = mysqli_real_escape_string($mysqli, $_POST['mobile']);
	$Address = mysqli_real_escape_string($mysqli, $_POST['Address']);	
	

	// checking empty fields
	if(empty($UserName) || empty($mobile) || empty($Address)) {	
			
		if(empty($UserName)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($mobile)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		
		if(empty($Address)) {
			echo "<font color='red'>description field is empty.</font><br/>";
		}
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE delivery SET UserName='$UserName',mobile='$mobile',Address='$Address'  WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM delivery WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$UserName = $res['UserName'];
	$mobile = $res['mobile'];
	$Address = $res['Address'];
	
}
?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v9 by Colorlib</title>
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
						<input type="text" name="UserName" value="<?php echo $UserName;?>"placeholder="Category" required>
					</div>
					<div class="form-row">
						<input type="text"name="mobile" value="<?php echo $mobile;?>" class="input-text" placeholder="Mobile" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="Address" value="<?php echo $Address;?>" class="input-text" placeholder="Address" required>
					</div>
				</div>
				<div class="form-row-last">
					<td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
					<input type="submit"  class="register" name="update" value="Update">
				</div>
			</form>
		</div>
	</div>
</body>
</html>