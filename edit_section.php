<?php 
	include('server.php');

	$id = $_GET['id'];
	$sql = "SELECT * FROM section WHERE section_id = '$id'";
	$result	= mysqli_query($db, $sql);
	if (mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_array($result)){

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="view_section.php" method="post">
	<div>
		<label>Section ID: </label><br>
		<input type="text" name="section_id" value="<?php echo $row['section_id']; ?>" required><br>
	</div>
	<div>
		<label>Section Name: </label><br>
		<input type="text" name="section_name" value="<?php echo $row['section_name']; ?>" required><br>
	</div>
	<?php 
			}
		}
	?>
	<br>
	<input type="submit" name="Update" value="Update">
	<button type="button"> <a href="view_section.php">Back<a/></button>
	</form>
	

	
</body>
</html>