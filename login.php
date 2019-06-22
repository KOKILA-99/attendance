<?php
$servername ="localhost";
$username="root";
$password="";
$email = $_POST["mail"];
$pass = $_POST["pswd"];
$conn =new mysqli($servername,$username,$password);


// Connect to the database
// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("signups",$conn);

$result = mysql_query("SELECT mail, pswd FROM gettin WHERE mail = $email");

$row = mysql_fetch_array($result);

if($row["mail"]==$email && $row["pswd"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>