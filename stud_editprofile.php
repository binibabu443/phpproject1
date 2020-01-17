<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style.css">
		<style>
		
		</style>  
	</head>
	<body class="bi">
		
		<div>
			<form action="stud_editprofile2.php" method=POST>
			<?php
						require_once 'connect.php';
                        $var=$_SESSION['stdid'];
						$sql="select * from studreg where stdid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
						

					?>
                <h1>Edit Profile</h1><br>
				
			
			
<table>

    <tr>
        <td>admno</td><td>:</td><td><input type="text" value=<?php echo $row['admno'];?> name="admno"></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><input type="text" value=<?php echo $row['address'];?> name="address"></td>
    </tr>
	<tr>
        <td>DOB</td><td>:</td><td><input type="text" value=<?php echo $row['dob'];?> name="dob"></td>
    </tr>
 
    <tr>
        <td>Gender</td><td>:</td><td><input type="text" value=<?php echo $row['gender'];?> name="gender"></td>
    </tr>
    
    <tr>
        <td>Mobile</td><td>:</td><td><input type="text" value=<?php echo $row['mobile'];?> name="mobile"></td>
    </tr>
    
    
	 <tr>
        <td>Username</td><td>:</td><td><input type="text" value=<?php echo $row['username'];?> name="username"></td>
    </tr
    <tr>
        <td>Password</td><td>:</td><td><input type="text" value=<?php echo $row['password'];?> name="password"></td>
    </tr>
	<tr>
        <td>Assigned Batch</td><td>:</td><td><input type="text" value=<?php echo $row['batch'];?> name="batch"></td>
    </tr>
</table>

 <?php
		}
?>
             
            
<br>
<input type="submit" value="Save" name="editstudent" class="button">
</form>
        </div>
	</div>
	</body>
</html>
		