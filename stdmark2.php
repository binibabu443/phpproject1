<?php
require_once"connect.php";
session_start();
if(isset($_POST['submit']))
{
	$stdid=$_POST['stdid'];
	$name=$_POST['name'];
	$assno=$_POST['assno'];
	$sub1mark=$_POST['sub1mark'];
	$sub2mark=$_POST['sub2mark'];
	$sub3mark=$_POST['sub3mark'];
	$percentage=$_POST['percentage'];
	
$sql="INSERT INTO stdmark(stdid,name,assno,sub1mark,sub2mark,sub3mark,percentage)VALUES('".$stdid."','".$name."','".$assno."','".$sub1mark."','".$sub2mark."','".$sub3mark."','".$percentage."') ";
	if(!$result=$conn->query($sql))
	{
		die("there was an error in the query['.$conn->error.']");
	}
	echo "thanku";
}
?>