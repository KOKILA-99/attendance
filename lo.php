<?php
$servername="localhost";
$username="root";
$password="";
$db_name="event";
$tbl_name="val";
session_start();
$conn = mysqli_connect($servername, $username, $password)or die("cannot connect");
mysqli_select_db($conn,$db_name)or die("cannot select db");
$myusername=$_POST['name'];
$mypassword=$_POST['pswd'];
$sql="select * from $tbl_name where eid='gem' AND pswd='$mypassword' AND uname='$myusername'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if ($count == 1)
{
	$row = $result->fetch_assoc();
	
	if($row) {
	$_SESSION['user'] = $row['uname'];
	
	}
header('Location:attend11.php');

}
else
{
echo "login failed";
}
?>