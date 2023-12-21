<?php
	require_once 'connect.php';
	if(ISSET($_POST['save'])){
		$student_id = $_POST['student_id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$course = $_POST['course'];
		$faculty = $_POST['faculty'];
		$conn->query("INSERT INTO `student` VALUES('', '$student_id','$firstname', '$middlename', '$lastname', '$course', '$faculty')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Saved Record");
					window.location = "student.php";
				</script>
			';
	}	
?>