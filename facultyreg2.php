<?php
require_once"connect.php";
session_start();
if(isset($_POST['create']))
{
	$faculty_id=$_POST['faculty_id'];
	$name=$_POST['name'];
	$adress=$_POST['adress'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$assignedbatch=$_POST['assignedbatch'];
$sql="INSERT INTO faculty(faculty_id,name,adress,dob,gender,qualification,mobile,username,password,assignedbatch)VALUES('".$faculty_id."','".$name."','".$adress."','".$dob."','".$gender."','".$qualification."','".$mobile."','".$username."','".$password."','".$assignedbatch."') ";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";
}
?>