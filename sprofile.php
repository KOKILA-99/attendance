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
	if($_SESSION['user']) {
		$rollno = $_SESSION['user'];
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

echo '<style> td,th{border:1px solid grey;border-collapse:collapse;padding:10px;}</style><center> <h2> Available courses </h2> <table> <tr> <th> Course No </th> <th> Course name </th> <th> Action </th> </tr>';
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<tr> <td>'.$row['code'].'</td><td>'.$row['name'].'</td><td> <a href="enroll.php?subject='.$row['code'].'">Enroll</a></td></tr>';
    }
	echo '</table><br/><br/>';
}


$sql1 = "SELECT * from attendance where  name like '$rollno'";

$result = $conn->query($sql1);

echo "<center> <h2> Attendance sheet </h2> <table> <tr> <th> Course </th> <th> Date </th> </tr> ";

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

       echo '<tr> <td>'.$row['code'].'</td><td>'.$row['date'].'</td></tr>';
    }
	echo '</table><a href="logout.php">Logout</a></center>';
}




	} 
}
else {
	echo "No one is logged in. Try again";
}
?>