<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	
	// var_dump($_FILES);
	// var_dump($_POST);

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$categary = mysqli_real_escape_string($mysqli, $_POST['categary']);
	$quantity = mysqli_real_escape_string($mysqli, $_POST['quantity']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);	

	// Image Uploading Section
	$targetDir = "uploads/";
	$fileName = basename($_FILES["image"]["name"]);
	$rand=rand();
	$finalFileName=$rand."-". $fileName;
	$targetFilePath = $targetDir.$finalFileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	
	
	if(!empty($_FILES["image"]["name"])){
		// Allow certain file formats
		$allowTypes = array('jpg','png','jpeg',"PNG",'JPG',"JPEG");
		// var_dump($_FILES["image"]["name"]);
		if(in_array($fileType, $allowTypes)){
			// Upload file to server

			if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
				// Insert image file name into database
				// $result = mysqli_query($mysqli, "UPDATE orders SET categary='$categary',quantity='$quantity',description='$description',image='$finalFileName'  WHERE id=$id");
				// if($result){
				// 	$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
				// }else{
				// 	$statusMsg = "File upload failed, please try again.";
				// } 


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
					$result = mysqli_query($mysqli, "UPDATE orders SET categary='$categary',quantity='$quantity',description='$description',image='$finalFileName'  WHERE id=$id");

					//redirectig to the display page. In our case, it is index.php
					header("Location: ../admin.php");
				}
			}
			}else{
				$statusMsg = "Sorry, there was an error uploading your file.";
			}
		}else{
			$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
		}
	}else{
		$statusMsg = 'Please select a file to upload.';
	}
	// Image Uploading Section End



	
?>
<?php
//getting id from url
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

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
			<form class="form-detail" name="form1" method="post" action="OrderEdit.php" enctype="multipart/form-data">
				<h2>Update Customer Request</h2>
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
				<div class="form-row-total">
					<div class="form-row">
						<input type="file" name="image" >
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