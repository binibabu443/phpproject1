<?php
require_once"connect.php";
session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$leavereason=$_POST['leavereason'];
	$todate=$_POST['todate'];
	$fromdate=$_POST['fromdate'];
	
$sql="INSERT INTO facleave(name,leavereason,fromdate,todate)VALUES('".$name."','".$leavereason."','".$fromdate."','".$todate."') ";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";
}
?>