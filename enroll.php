<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signups";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($_SESSION){
	if($_SESSION['user']){
		if($_SESSION['type']=='student') {
		if($_GET){
			if($_GET['subject']){
				$code = $_GET['subject'];
			
				$rollno = $_SESSION['user'];
				$sql1 = "SELECT * FROM course where rollno='$rollno' and coursecode='$code'";
				$result = $conn->query($sql1);

				if ($result->num_rows > 0) {
					echo "Already registered </br>";
					echo "Go to <a href='sprofile.php'>Profile</a> page";
				}
				else {
				$sql = "INSERT INTO course VALUES ('$code','$rollno')";
				if ($conn->query($sql) === TRUE) {
					echo "Enrolled </br>";
					echo "Go to <a href='sprofile.php'>Profile</a> page";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				}
				$conn->close();
			}
		}
	}
	}
}


?>
				