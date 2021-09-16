<?php

$name = $_POST['username'] ;
$pass = $_POST['password'] ;

//echo $name;
$con =new mysqli("localhost", "root", "", "unima_exam");
if($con->connect_error){
	die('connection failed : '.$con->connect_error);
}else{
	$stmt = $con->prepare("select * from registrar where username=?");
	$stmt->bind_param("s",$name);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows > 0){
      $data = 	$stmt_result->fetch_assoc();
      if($data['password'] === $pass){
      	echo "LOGIN SUCCESSFULY...";
      }
	      }
	else {
			echo "INVALID USERNAME OR PASSWORD...";
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
<h1>Registrar Portal</h1>
<br><a href='unimaLogin.html'><input type=button value=Logout name=logout style="position: relative;left:45%"></a>
</div>
<img src="unima.JPG">
	<h2 align="center"></h2>
	
	
<form action="registrar.html">
	


	<h4>Main Navigation Menu</h4>

	<div id="nav">

     <button type="submit"><b>Add Exam Invigilators</b></button><br>
    


</form >

</body>
</html>