<?php
require_once"connect.php";


	$name=$_POST['name'];
	$adress=$_POST['adress'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	$qualification=$_POST['qualification'];
	$mobile=$_POST['mobile'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$assignedbatch=$_POST['assignedbatch'];
$sql="UPDATE faculty SET name='".$name."',adress='".$adress."',dob='".$dob."',gender='".$gender."',qualification='".$qualification."',mobile='".$mobile."',username='".$username."',password='".$password."',assignedbatch='".$assignedbatch."' WHERE name='$name'";

	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";

?>