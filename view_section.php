<?php
include ("server.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Laboratory Exam</title>

</head>
<body>
<?php $results = mysqli_query($db, "SELECT * FROM section"); ?>

	<table>
	<thead>
		<tr>
			<th>Section ID</th>
			<th>Section Name</th>
			<th>Action</th>
		
		</tr>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($results)){ ?>
		<tr>
			<td><?php echo $row['section_id']; ?></td>
			<td><?php echo $row['section_name']; ?></td>
			<td>
			    <button type="button"> <a href="edit_section.php?id=<?php echo $row['section_id']; ?>">Edit</a></button>
				<button type="button"> <a href="delete_section.php?id=<?php echo $row['section_id']; ?>">Delete</a></button>
			</td>
		</tr>
		<?php } ?>
	</tbody>
	</table>
	<br><br>
		<div>
			<button type="button"> <a href="add_section.php">Add</a></button>
		</div>

</body>
</html>