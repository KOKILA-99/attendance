<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signups";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($_SESSION){
	if($_SESSION['type']=='staff'){
		if($_GET){
			if($_GET['rollno']){
				$rollno = $_GET['rollno'];
				$code = $_GET['course'];
				$date = $_GET['date'];
				
			
				
				
				
				$sql1 = "SELECT * FROM attendance where code='$code' and name='$rollno' and date='$date'";
				$result = $conn->query($sql1);
				
				
				if ($result->num_rows > 0) {
					echo "Already marked the attendance </br>";
					echo "Go to <a href='courseentry.html'>previous</a> page";
				}
				else {
				
				
				
				$sql ="INSERT INTO attendance values ('$code','$rollno','$date')";
				
				if ($conn->query($sql) === TRUE) {
    echo "Attendance updated successfully <br/>";
	echo "Go <a href='midattend.php'>back</a>";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
			}
			}
		}
	}
}