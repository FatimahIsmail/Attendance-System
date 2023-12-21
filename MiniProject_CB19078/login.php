<?php
	require_once 'admin/connect.php';
	$student = $_POST['student'] ?? "";
	$subject_code = $_POST["subject_code"];
	$time = date("H:i", strtotime("+7 HOURS"));
	$date = date("Y-m-d", strtotime("+7 HOURS"));
	$q_student = $conn->query("SELECT * FROM `student` WHERE `student_id` = '$student'") or die(mysqli_error());
	$q_subject_code = $conn->query("SELECT * FROM `time` WHERE `subject_code` = '$subject_code'") or die(mysqli_error());                                        
	$f_student = $q_student->fetch_array();
	$f_subject_code = $q_subject_code ->fetch_array();
	$student_name = $f_student['firstname']." ".$f_student['lastname'];
	$conn->query("INSERT INTO `time` VALUES('', '$student', '$student_name', '$time', '$date', '$subject_code')") or die(mysqli_error($conn));
	echo "<h3 class = 'text-muted'>".$student_name." <label class = 'text-muted'>attendance record for ".$subject_code." <label class = 'text-info'>at  ".date("h:i a", strtotime($time))."</label></h3>";