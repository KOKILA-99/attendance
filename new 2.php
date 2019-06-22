<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="signups";
$conn =new mysqli($servername,$username,$password,$dbname);
$sname=$_POST['sname'];
$department=$_POST['dept'];
$addr=$_POST['addr'];
$email=$_POST['mail'];
$snum=$_POST['snum'];
$pswd=$_POST['pswd'];
$sql="INSERT INTO gett(sname,department,address,email,snum,pswd)
VALUES('$sname','$department','$addr','$email','$snum','$pswd')";
if($conn->query($sql)==TRUE){
echo "<a href='flogin.html'>click here to login</a>";
}
else{
echo"Error:".$sql."<br>".$conn->error;
}
$conn->close();  
?>