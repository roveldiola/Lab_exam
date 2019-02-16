<?php
include ("server.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>
	<form action = "view_section.php" method = "post">
	<div>
		<label>Section ID: </label><br>
		<input type="text" name="section_id" placeholder="Number" value="<?php echo $section_id; ?>" required><br>
	</div>
	<div>
		<label>Section Name: </label><br>
		<input type="text" name="section_name" placeholder="Name" value="<?php echo $section_name; ?>" required><br>
	</div><br>

	<div>
		<button type="submit" name="save">Save</button>
		<button type="button"> <a href="view_section.php">View Section</a></button>
	</div>
	</form>

</body>
</html>

