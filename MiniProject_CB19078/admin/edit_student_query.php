<?php
	require_once 'connect.php';
	$student_id = $_POST['student_id'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$course = $_POST['course'];
	$faculty = $_POST['faculty'];
		$conn->query("UPDATE `student` SET `student_id` = '$student_id', `firstname` = '$firstname', `middlename` = '$middlename', `lastname` = '$lastname', `course` = '$course', `faculty` = '$faculty' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Successfully Edited");
				window.location = "student.php";
			</script>
		';	
?>