<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="signups";
$conn =new mysqli($servername,$username,$password,$dbname);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myrollno = mysqli_real_escape_string($conn,$_POST['rnum']);
	  $myusername = mysqli_real_escape_string($conn,$_POST['mail']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pswd']); 
      
      $sql = "SELECT * FROM gettin WHERE  rollno= '$myrollno' and email = '$myusername' and pswd = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if(mysqli_num_rows($result) == 1) {
         
          echo "<a href='itsme.html'>click here to login</a>";
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
