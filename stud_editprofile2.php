<?php
require_once"connect.php";
   
	$address=$_POST['address'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
$sql="UPDATE studreg SET address='".$address."',dob='".$dob."',gender='".$gender."',mobile='".$mobile."',username='".$username."',password='".$password."' WHERE username='$username'";


	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";

?>