<?php
require_once"connect.php";
session_start();
if(isset($_POST['submit']))
{
	$date=$_POST['date'];
	$stdid=$_POST['stdid'];
	$name=$_POST['name'];
	$hr1status=$_POST['hr1status'];
	$hr2status=$_POST['hr2status'];
	$hr3status=$_POST['hr3status'];
	$hr4status=$_POST['hr4status'];
	
$sql="INSERT INTO studattd(date,stdid,name,hr1status,hr2status,hr3status,hr4status)VALUES('".$date."','".$stdid."','".$name."','".$hr1status."','".$hr2status."','".$hr3status."','".$hr4status."') ";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";
}
?>