<?php
require_once"connect.php";
session_start();
if(isset($_POST['create']))
{
	$stdid=$_POST['stdid'];
	$admno=$_POST['admno'];
	$name=$_POST['name'];
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$admdate=$_POST['admdate'];
	$guardian=$_POST['guardian'];
	$batch=$_POST['batch'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	
$sql="INSERT INTO studreg(stdid,admno,name,address,dob,gender,mobile,admdate,guardian,batch,username,password)VALUES('".$stdid."','".$admno."','".$name."','".$address."','".$dob."','".$gender."','".$mobile."','".$admdate."','".$guardian."','".$batch."','".$username."','".$password."') ";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";
}
?>