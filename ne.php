<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="signups";
$conn =new mysqli($servername,$username,$password,$dbname);
$sname=$_POST['sname'];
$rollno=$_POST['rnum'];
$department=$_POST['dept'];
$addr=$_POST['addr'];
$email=$_POST['mail'];
$pnum=$_POST['pnum'];
$snum=$_POST['snum'];
$pswd=$_POST['pswd'];
$sql="INSERT INTO gettin(sname,rollno,department,address,email,pnum,snum,pswd)
VALUES('$sname','$rollno','$department','$addr','$email','$pnum','$snum','$pswd')";
if($conn->query($sql)==TRUE){
echo '<body style="background-color:cyan"><div style="background-color:deeppink"></br></br></br>
<center><p><h1>STUDENT LOGIN</h1></p></center></br></br></div></br></br>
<center><form  method ="post" action="log.php">
rollno<input type="text" name="rnum" size="25"/><br></br></br></br>
email_id<input type="text" name="mail" size="25"/><br></br></br></br>
password<input type="password" name="pswd" size="25"/><br></br></br></br>
<input type="submit" />
</center>
</form>
</body>';
}
else{
echo"Error:".$sql."<br>".$conn->error;
}
