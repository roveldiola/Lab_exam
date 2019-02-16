<?php
include ('server.php');

	$id = $_GET['id'];
	$query = "SELECT * FROM section";
	$result = mysqli_query($db, $query);
	$sql = "SELECT * FROM student WHERE student_number = '$id'";
	$result1 = mysqli_query($db, $sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>
	<form action = "view_student.php" method = "post">
	<?php 
		if(mysqli_num_rows($result1)){
			while($row1 = mysqli_fetch_array($result1)) {

	?>
	<div>
		<label>Student No.: </label><br>
		<input type="text" name="student_number" value="<?php echo $row1['student_number']; ?>" required><br>
	</div>
	<div>
		<label>First Name: </label><br>
		<input type="text" name="first_name" value="<?php echo $row1['first_name']; ?>" required><br>
	</div>
	<div>
		<label>Last Name: </label><br>
		<input type="text" name="last_name" value="<?php echo $row1['last_name']; ?>" required><br>
	</div>
	<div>
		<label>Middle Initial: </label><br>
		<input type="text" name="middle_initial" value="<?php echo $row1['middle_initial']; ?>" required><br>
	</div>
	<div>
		<label>Birthday: </label><br>
		<input type="text" name="birthday" value="<?php echo $row1['birthday']; ?>" required><br>
	</div>
	<div>
		<label>Section ID: </label><br>
		<select name="section_id" value="<?php echo $row1['section']; ?>">
		<?php
			if(mysqli_num_rows($result)){
				while($row = mysqli_fetch_array($result)){
		?>
		<option value="<?php echo $row['section_id'];?>" selected><?php echo $row['section_name']; ?></option>
		<?php
					}
				}
			}
		}
			?>
		</select>
	</div>
	<br>
	<div>
		<button type="submit" name="update">Update</button>
		<button type="button"> <a href="view_student.php">Back<a/></button>
	</div>
	</form>

</body>
</html>

