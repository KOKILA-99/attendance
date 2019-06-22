<?php
session_start();

if($_SESSION){
	if($_SESSION['type']=='staff'){
		if($_GET){
			if($_GET['rollno']){
				$rollno = $_GET['rollno'];
				$code = $_GET['course'];
		
		
				echo "
				<center>
				<h2> Enter the date for which you have to mark the attendance </h2>
					<form method='GET' action='attendance.php'>
						<input type='text' name='rollno' value='".$rollno."' /> <br/><br/>
						<input type='text' name='course' value='".$code."'/> <br/><br/>
						<input type='date' name='date' /> <br/><br/>
						<input type='submit' value='submit'/>
					</form>
				</center>
				";

			}
		}
	}
}







?>