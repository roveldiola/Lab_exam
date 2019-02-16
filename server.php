<?php
session_start();

// connect to db
$db = mysqli_connect('localhost', 'root', '', 'lab_exam');

// initializing variables
$section_id = "";
$section_name = "";

	// insert to Table 'section'
	if (isset($_POST['save'])) {
		$section_id = $_POST['section_id'];
	    $section_name = $_POST['section_name'];
		
		$sql = "INSERT INTO section (section_id, section_name) 
			VALUES ('$section_id', '$section_name')";
		mysqli_query($db, $sql);
		header('location: view_section.php');
	}

	// update data from Table 'section'
	if (isset($_POST['Update'])) {
		$section_id = mysqli_real_escape_string($db, $_POST['section_id']);
		$section_name = mysqli_real_escape_string($db, $_POST['section_name']);

		$sql = "UPDATE section SET section_id='$section_id'
			,section_name='$section_name' WHERE section_id='$section_id'";
		mysqli_query($db, $sql);
		header('location: view_section.php');
	}



// initializing variables
$student_number = "";
$first_name = "";
$last_name = "";
$middle_initial = "";
$birthday = "";
$section_id = "";

	// insert data to Table 'student'
	if (isset($_POST['Save'])) {
		$student_number = $_POST['student_number'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$middle_initial = $_POST['middle_initial'];
		$birthday = $_POST['birthday'];
		$section_id = $_POST['section_id'];
		
		$sql = "INSERT INTO student (student_number, first_name, last_name, middle_initial, birthday, section_id)
			VALUES ('$student_number', '$first_name', '$last_name', '$middle_initial', '$birthday', '$section_id')";
		mysqli_query($db, $sql);
		$result = mysqli_query($db, $sql);
		if($result == true) {
			header('location: view_student.php');
		}
	}

	// update data from Table 'student'
	if (isset($_POST['update'])) {
		$student_number = mysqli_real_escape_string($db, $_POST['student_number']);
		$first_name = mysqli_real_escape_string($db, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
		$middle_initial = mysqli_real_escape_string($db, $_POST['middle_initial']);
		$birthday = mysqli_real_escape_string($db, $_POST['birthday']);
		$section_id = mysqli_real_escape_string($db, $_POST['section_id']);

		$sql = "UPDATE student SET student_number='$student_number', first_name='$first_name', last_name='$last_name', middle_initial='$middle_initial', birthday='$birthday', section_id='$section_id'
			WHERE student_number='$student_number'";
		mysqli_query($db, $sql);
		header('location: view_student.php');
	}

?>