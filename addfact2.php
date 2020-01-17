<?php
require_once"connect.php";
session_start();
if(isset($_POST['create']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
$sql="INSERT INTO faculties(username,password)VALUES('".$username."','".$password."') ";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";
}
?>