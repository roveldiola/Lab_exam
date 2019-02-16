<?php 
include('server.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM student WHERE student_number = '$id'";
	mysqli_query($db, $query);
	header('location: view_student.php');