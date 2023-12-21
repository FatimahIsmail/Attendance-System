<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Smart Attendance System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>
	</head>
	<body class = "alert-info">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "UMP LOGO.png" width = "200px" height = "65px"/>
					<p class = "navbar-text pull-right">Smart Attendance System</p>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<div class = "col-lg-3"></div>
			<div class = "col-lg-6 well">
				<h2>Attendance Login</h2>
				<br />
				<div id = "result"></div>
				<br />
				<br />
				<form enctype = "multipart/form-data">
					<div class = "form-group">
						<label>Student ID:</label>
						<input type = "text" id = "student" class = "form-control" onclick="record()" required = "required"/>
						<label>Subject Code:</label>
						<input type = "text" id = "subject_code" class = "form-control" required = "required"/>
						<br />
						<br />
						<div id = "error"></div>
						<br />
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
				</form>
			</div>
		</div>
	</body>
	<script>

	  function record() {
            var recognition = new webkitSpeechRecognition();
            recognition.lang = "en-GB";

            recognition.onresult = function(event) {
                // console.log(event);
                document.getElementById('student').value = event.results[0][0].transcript;
            }
            recognition.start();

        }
	</script>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>