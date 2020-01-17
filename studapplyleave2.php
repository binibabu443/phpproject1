<?php
require_once("connect.php");
session_start();
    $name=$_POST['name'];
	$toadmin=$_POST['toadmin'];
	$leavereason=$_POST['leavereason'];
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
if(isset($_POST['submit']))
{
	
	$sql="INSERT INTO studapplyleave(name,toadmin,leavereason,fromdate,todate)VALUES('".$name."','".$toadmin."','".$leavereason."','".$fromdate."','".$todate."')";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	else
	{
	echo "thanku";
	}
}
?>