<?php
$error=''; //Variable to Store error message;
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signups";

if(isset($_POST['mail'])){
 if(empty($_POST['mail']) || empty($_POST['pswd'])){
 echo 'Username or Password is Invalid';
 }
 else
 {
 //Define $user and $pass
 $rollno = $_POST['rnum'];
 $user=$_POST['mail'];
 $pass=$_POST['pswd'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 //sql query to fetch information of registerd user and finds user match.
 $sql =  "SELECT * FROM gettin WHERE pswd='$pass' AND email='$user'";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
	$_SESSION['user'] = $rollno;
	$_SESSION['type']='student';
 header("Location:sprofile.php"); // Redirecting to other page
 }
 else
 {
 echo 'Username or Password is Invalid';
 }
$conn->close(); // Closing connection
 }
}

?>
