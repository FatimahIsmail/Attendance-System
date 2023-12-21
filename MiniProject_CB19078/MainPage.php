<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Attendance System</title>
</head>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
h1,h2{
  margin: auto;
  width: 60%;
  border: 0px solid #73AD21;
  padding: 50px;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  font-weight: 900;
  color: white;
}
body{
	height: 100%;
	width: 100%;
	background-image: url('https://cdn.wallpapersafari.com/43/24/ZeGDnQ.jpg');
  	background-repeat: no-repeat;
 	background-attachment: fixed;
  	background-position: center; 
}
.container { 
  height: 200px;
  position: relative;
  border: collapse; 
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.btn{
  
  padding:4px;
  margin-top:10px;
  
}
.btn1{

  padding:4px;
  margin-top:70px;
  margin-left:17px;
}
</style>
<body>
<h1>Welcome To Smart Attendance System</h2>

<div class="container">
  <h2>Please Choose Your Login Mode</h2>
  <div class="center">
 	<form action="index.php" method="POST">
	  
	<button class="btn1">Student</button></a> 
	</form>
	<br>
	<form action="admin/index.php" method="POST">  
	<button class="btn">Administrator</button></a> 
	</form>
  </div>
</div>
</body>
</html>