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
		$code = $_POST['sname'];
		
		$sql = "SELECT * FROM course where coursecode='$code'";
		$result = $conn->query($sql);
		
		echo '<style> td,th{border:1px solid grey;border-collapse:collapse;padding:10px;}</style><center> <h2> Enrolled students </h2> <table> <tr> <th> Course code </th> <th> rollno </th> <th> Action </th>  </tr>';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	echo '<tr> <td>'.$row['coursecode'].'</td><td>'.$row['rollno'].'</td><td><button onclick="myfunction"><a href="attendance1.php?rollno='.$row['rollno'].'&course='.$row['coursecode'].'">Mark attendance</a></button></td></tr>';
    }
	echo '</table><a href="logout.php">Logout</a></center>';
} 

	} 
}
		


?>