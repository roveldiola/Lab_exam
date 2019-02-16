<?php
include ('server.php');

	$sql = "SELECT * FROM section";
	$result = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>
	<form action="view_student.php" method="post">
	<div>
		<label>Student Number: </label><br>
		<input type="text" name="student_number" placeholder="Number" value="<?php echo $student_number; ?>" required><br>
	</div>
	<div>
		<label>First Name: </label><br>
		<input type="text" name="first_name" placeholder="Name" value="<?php echo $first_name; ?>" required><br>
	</div>
	<div>
		<label>Last Name: </label><br>
		<input type="text" name="last_name" placeholder="Name" value="<?php echo $last_name; ?>" required><br>
	</div>
	<div>
		<label>Middle Initial: </label><br>
		<input type="text" name="middle_initial" placeholder="Middle Initial" value="<?php echo $middle_initial; ?>" required><br>
	</div>
	<div>
		<label>Birthday: </label><br>
		<input type="date" name="birthday" placeholder="Birthday" value="<?php echo $birthday; ?>" required><br>
	</div>
	<div>
		<label>Section: </label><br>
		<select name="section_id">
			<?php
				if(mysqli_num_rows($result)){
					while($row = mysqli_fetch_array($result)){
			?>
			<option value="<?php echo $row['section_id'];?>"><?php echo $row['section_name'];?></option>
			<?php
					}
				}
			?>
			
		</select>
	</div>
	<br>
	<div>
		<button type="submit" name="Save">Save</button>
		<button type="button"> <a href="view_student.php">View Student</a></button>
	</div>
	
	</form>

</body>
</html>