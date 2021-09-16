<?php

$name = $_POST['username'] ;
$pass = $_POST['password'] ;

//echo $name;
$con =new mysqli("localhost", "root", "", "unima_exam");

if($con->connect_error){
	die('connection failed : '.$con->connect_error);
}else{
	$stmt = $con->prepare("select * from lecturers where username=?");
	$stmt->bind_param("s",$name);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){
      $data = 	$stmt_result->fetch_assoc();
      if($data['password'] === $pass){
      	//echo ;
      }
	      }
	else {
			//echo "INVALID USERNAME OR PASSWORD...";
	}
}

?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="lecturerLogin.css">
</head>
<body style="color: black; background-color: white">
	<div id="header">
<h1>Lecturer Portal</h1>
<br><a href='unimaLogin.html'><input type=button value=Logout name=logout style="position: relative;left:45%"></a>
</div>
<img src="unima.JPG">
	<h2 align="center"></h2>
	
	
<form>
	


	<h4>Main Navigation Menu</h4>

	<div id="nav">

     <a href="fetch.php" style="text-decoration: none;color: darkblue"><b>View Exam invigilation list</b></a><br><br>

     <a href="fetchStudents.php" style="text-decoration: none;color: darkblue"><b>Courses</b></a><br><br>
    
</div>



<div id="footer">
 © Group 11 Project
</div>
</form >
</body>
</html>