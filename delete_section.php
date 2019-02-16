<?php include('server.php');

	$id 	= $_GET['id'];
	$query 	= "DELETE FROM section WHERE section_id = '$id'";
	mysqli_query($db, $query);
	header('location: view_section.php');