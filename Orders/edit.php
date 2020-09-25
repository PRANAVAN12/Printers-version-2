<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$categary = mysqli_real_escape_string($mysqli, $_POST['categary']);
	$quantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);	
	

	// checking empty fields
	if(empty($categary) || empty($quantity) || empty($description)) {	
			
		if(empty($categary)) {
			echo "<font color='red'>categary field is empty.</font><br/>";
		}
		
		if(empty($quantity)) {
			echo "<font color='red'>email field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>description field is empty.</font><br/>";
		}
				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE orders SET categary='$categary',quantity='$quantity',description='$description'  WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM orders WHERE id=$id");

while($res = mysqli_fetch_array($result)) {
	$categary = $res['categary'];
	$quantity = $res['quantity'];
	$description = $res['description'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Suji Printers</title>
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
						<input type="text" name="categary" value="<?php echo $categary;?>" class="input-text" placeholder="Category" required>
					</div>
					<div class="form-row">
						<input type="text"name="quantity" value="<?php echo $quantity;?>" class="input-text" placeholder="Quantity" >
					</div>
				</div>
				<div class="form-row-total">
					<div class="form-row">
						<input type="text" name="description" value="<?php echo $description;?>" class="input-text" placeholder="Description" required>
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