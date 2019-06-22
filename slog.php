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

if($_POST){
	
if(	$_POST['tid']) {
	
$tid = $_POST['tid'];
$mail = $_POST['mail'];
$password = $_POST['pswd'];

$sql = "SELECT * FROM gett where sname='$tid' and pswd='$password'";
$result = $conn->query($sql);
 if ($result->num_rows > 0) {
	$_SESSION['user'] = $tid;
	$_SESSION['type']='staff';
 header("Location:courseentry.html"); // Redirecting to other page
 }
 else
 {
 echo 'Username or Password is Invalid';
 }
$conn->close(); 
}
}

?>