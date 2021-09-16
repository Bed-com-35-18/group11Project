<?php

$Invigilator = $_POST["Invigilator"];
$roomName = $_POST["roomName"];
$coursecode = $_POST["coursecode"];
$date = $_POST["date"];
$time = $_POST["time"];

//DATABASE CONNECTION
$conn =new mysqli("localhost", "root", "", "unima_exam");
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registrar(Invigilator, roomName, courseCode, date, time) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss",$Invigilator, $roomName, $coursecode, $date, $time );
	$stmt->execute();
	echo "details successfully added...";
	$stmt->close();
	$conn->close();
}



?>