<?php
include ('server.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>
<?php $result = mysqli_query($db, "SELECT * FROM student"); ?>

	<table>
		<thead>
			<tr>
				<th>Student No.</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Middle Initial</th>
				<th>Birthday</th>
				<th>Section</th>
				<th>Action<th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($result)) { ?>
			<tr>
				<td><?php echo $row['student_number']; ?></td>
				<td><?php echo $row['first_name']; ?></td>
				<td><?php echo $row['last_name']; ?></td>
				<td><?php echo $row['middle_initial']; ?></td>
				<td><?php echo $row['birthday']; ?></td>
				<td><?php echo $row['section_id']; ?></td>
				<td>
				    <button type="button"> <a href="edit_student.php?id=<?php echo $row['student_number']; ?>">Edit</a></button>
					<button type="button"> <a href="delete_student.php?id=<?php echo $row['student_number']; ?>">Delete</a></button>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<br><br>
	<div>
		<button type="button"> <a href="add_student.php">Add</a></button>
	</div>

</body>
</html>