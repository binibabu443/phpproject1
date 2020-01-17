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
		<div class="display">
		<div class="navbar">
			<h1><u>FACULTY</u></h1>
			<ul>
				<li> <a href="facultyhome.php">Home</a> </li>
				<li> <a href="fac_profile.php">My profile</a> </li>
				<li> <a href="">Student Details</a>
					<div class="submenu">
						<ul>
							<li><a href="view_student.php">Personal details</a></li>
							<li><a href="view_studattndc.php">Attendance</a></li>
							<li><a href="view_mark.php">Mark</a></li>
						</ul>

					</div>
				</li>
				<li> <a href="fac_appliedleave.php">Leave</a></li>
				<li><a href="login.php">Logout</a></li>
			</ul>
        </div>
		<div>
			<form action="fac_editprofile2.php" method=POST>
			<?php
						require_once 'connect.php';

						$sql="select * from faculty where faculty_id=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
						

					?>
                <h1>Edit Profile</h1><br>
				
			
			
<table>

    <tr>
        <td>Name</td><td>:</td><td><input type="text" value=<?php echo $row['name'];?> name="name"></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><input type="text" value=<?php echo $row['adress'];?> name="adress"></td>
    </tr>
	<tr>
        <td>DOB</td><td>:</td><td><input type="text" value=<?php echo $row['dob'];?> name="dob"></td>
    </tr>
 
    <tr>
        <td>Gender</td><td>:</td><td><input type="text" value=<?php echo $row['gender'];?> name="gender"></td>
    </tr>
    <tr>
        <td>Qualification</td><td>:</td><td><input type="text" value=<?php echo $row['qualification'];?> name="qualification"></td>
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
        <td>Assigned Batch</td><td>:</td><td><input type="text" value=<?php echo $row['assignedbatch'];?> name="assignedbatch"></td>
    </tr>
</table>

 <?php
		}
?>
             
            
<br>
<input type="submit" value="Save" name="editfac" class="button">
</form>
        </div>
	</div>
	</body>
</html>
		