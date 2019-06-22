<?php
$servername='localhost';
$username='root';
$password='';
$dbname='student';
 
$con=mysqli_connect($servername,$username,$password,$dbname);

?>


<html>
<head>
<script>
function preventNumberInput(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107 ){
        e.preventDefault();
		document.getElementById("name").innerHTML='Name must have alphabet characters only';
    }
}
function preventCharInput(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107 ||keyCode==8)
	{
	}
	else{
        e.preventDefault();
		document.getElementById("roll").innerHTML='Roll number must have numbers only';
    }
}
function preventCharacInput(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107 ||keyCode==8)
	{
	}
	else{
        e.preventDefault();
		document.getElementById("num").innerHTML='Contact number must have numbers only';
    }
}
function preventCharacterInput(e){
    var keyCode = (e.keyCode ? e.keyCode : e.which);
    if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107 ||keyCode==8)
	{
	}
	else{
        e.preventDefault();
		document.getElementById("no").innerHTML='Contact number must have numbers only';
    }
}
function validate()
{
   var nv=document.myform.uname.value;
   var av=document.myform.addr.value;
   var mv=document.myform.mail.value;
   var dv=document.myform.d.value;
   var cv=document.myform.ctry.value;
   var pv=document.myform.phone.value;
   if(nv=="")
   {
		document.myform.uname.focus();
		return false;
   }
	else if(av=="")
	{
		document.myform.addr.focus();
		return false;
	
	}
	else if(mv=="")
	{
		document.myform.mail.focus();
		return false;
	
	}
	else if(dv=="")
	{
		document.myform.d.focus();
		return false;
	
	}
	else if(cv=="")
	{
		document.myform.ctry.focus();
		return false;
	
	}
	else if(pv=="")
	{
		document.myform.phone.focus();
		return false;
	
	}
	
	return true;
}



function firstfocus()
{ 
	var u=document.myform.uname.focus();
	return true;
}	
function namevalidate()
{
	var uid=document.myform.uname.value;
	var x=/^[A-Za-z]+$/;
	if(uid.match(x))
  {
  document.getElementById("name").innerHTML='';
  document.myform.rn.focus();
  return true;
  }
  else
  {
  document.getElementById("name").innerHTML='Name is required!';
  document.myform.uname.focus();
  return false;
  }
}
function novalidate()
{
     var ph=document.myform.rn.value;
	var p=/^[0-9]+$/;
	if(ph.match(p))
	{
		document.getElementById("roll").innerHTML="";
		document.myform.addr.focus();
		return true;
	}
	else
	{
		document.getElementById("roll").innerHTML="Roll nois required!";
		document.myform.rn.focus();
		return false;
		}
}
function addressvalidate()
{
	var add=document.myform.addr.value;
	if(add=="")
	{
		document.getElementById("address").innerHTML="Address is required!";
		document.myform.addr.focus();
		return false;
	}
	else
	{
		document.getElementById("address").innerHTML="";
		document.myform.mail.focus();
		return true;
	}
}
function emailvalidate()
{
	var e=document.myform.mail.value;
	var format=/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}/;
	if(e=="")
	{
		document.getElementById("email").innerHTML='Email is required!';
		document.myform.mail.focus();
		return false;
	}
	else if(e.match(format))
	{
		document.getElementById("email").innerHTML='';
		document.myform.phonenum.focus();
		return true;
	}
	else
	{
		document.getElementById("email").innerHTML='Invalid Email-id!';
		document.myform.mail.focus();
		return false;
		
	}
	
}

function phonenumvalidate()
{
     var ph=document.myform.phonenum.value;
	var p=/^[0-9]+$/;
	if(ph.match(p))
	{
		document.getElementById("num").innerHTML="";
		document.myform.phone.focus();
		return true;
	}
	else
	{
		document.getElementById("num").innerHTML="Phone Number is required!";
		document.myform.phonenum.focus();
		return false;
		}
}
function phonevalidate()
{
    var ph=document.myform.phone.value;
	var p=/^[0-9]+$/;
	if(ph.match(p))
	{
		document.getElementById("no").innerHTML="";
		return true;
	}
	else
	{
		document.getElementById("no").innerHTML="Phone Number is required!";
		document.myform.phone.focus();
		return false;
		}
}
</script>
<style>
div{
	font-family:timesnewroman;
	margin-left:230px;
	font-weight:bold;
	font-style:italic;
	font-size:25px;
	color:violet;
	}
span{
	font-style:italic;
	font-family:ArialBlack;
	font-weight:normal;[
    }
</style>
</head>
<body bgcolor="white" onload="firstfocus()">
<h1 style="text-align:center;color:orange"><b>SIGN UP FORM</b></h1>
<form action="index1.html" method="post">
<div>
NAME		:<input type="text" size="55" name="uname" onkeydown="preventNumberInput(event)"
               onkeyup="preventNumberInput(event)" onblur="namevalidate()"><span style="color:red;font-size:16" id="name"></span><br/><br/>
			  
DEPARTMENT  :<select name="department">
  <option value="it">IT</option>
  <option value="cse">CSE</option>
  <option value="ece">ECE</option>
  <option value="eee">EEE</option>
  <option value="civil">CIVIL</option>
  <option value="mech">MECHANICAL</option>
  <option value="ibt">IBT</option>
  <option value="prod">PRODUCTION</option>
  <option value="eie">EIE</option>
</select></br></br>			
			
ADDRESS		:<textarea cols="57" name="addr" onblur="addressvalidate()"></textarea><span style="color:red;font-size:16" id="address"></span><br/><br/>	
EMAIL-ID	:<input type="text" size="55" name="mail" onblur="emailvalidate()"><span style="color:red;font-size:16" id="email"></span><br/><br/>
PHONE NUMBER		:<input type="text" size="55" name="phone"  onkeydown="preventCharacterInput(event)" onblur="phonevalidate()">
			<span style="color:red;font-size:16" id="no"></span><br/><br/>
PASSWORD :<input type="password" size="55" name="pwd" id="pass"><br/><br/>
CONFIRM PASSWORD :<input type="password" size="55" name="cpwd" id="cpassword"><br/><br/>			
			<pre>                 <button name="register" type="submit">Sign Up</button></pre>	
			
			
			
						
					
					
				
			
			
		
</div>
</form>
<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['uname'];
				@$rn=$_POST['rn'];
				@$address=$_POST['addr'];
				
				@$email=$_POST['mail'];
				@$dpt=$POST['department'];
			
				@$mobile=$_POST['phonenum'];
@$mobile1=$_POST['phone'];
@$password=$_POST['pwd'];
@$cpass=$_POST['cpwd'];
				if($password==$cpass)
				{
				$query = "insert into stud values('$username','$rn','$address','$email','$password','$mobile','$mobile1','$dpt')";
							$query_run = mysqli_query($con,$query);
			
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
			    }
			
			else
			{
			echo'$dpt';
			}
			}
			?>
</body>
</html>
