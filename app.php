<?php

$result = $_POST["result"];


//DATABASE CONNECTION
$conn =new mysqli("localhost", "root", "", "unima_exam");
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into student(result) values(?)");
	$stmt->bind_param("s",$result );
	$stmt->execute();
	echo "details successfully added...";
	$stmt->close();
	$conn->close();
}



?>