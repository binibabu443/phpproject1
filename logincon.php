<?php

require_once("connect.php");


if(isset($_POST['submit']));
{
	$username=$_POST['username'];
	$password=$_POST['password'];
if($username=="admin"&& $password=="12345")
{
	header('location:admin.php');
}
else
		{
			$sql="select * from faculty where username='".$username."' and password='".$password."'";
			$result= mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					session_start();
					$_SESSION['faculty_id']=$row['faculty_id'];
			
					require_once "factpage.php";
				}
			}
			else
			{
				$sql="select * from studreg where username='".$username."' and Password='".$password."'";
				$result= mysqli_query ($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						session_start();
					$_SESSION['stdid']=$row['stdid'];
					require_once "studentprof.php";
					}
				}
				else
				{
					echo "Name or Password incorrect";
				}
			
			}
		}
		mysqli_close($conn);
		
	}
?>