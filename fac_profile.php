
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
		
        <div>
			<form>
				<?php
						require_once 'connect.php';
						session_start();
						$var=$_SESSION['faculty_id'];
						$sql="select * from faculty where faculty_id =$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			<h1><?php echo $row['name'];?></h1><br>
			
<table>

    <tr>
        
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><?php echo $row['adress'];?></td>
    </tr>
    <tr>
        <td>DOB</td><td>:</td><td><?php echo $row['dob'];?></td>
    </tr>
    <tr>
        <td>Gender</td><td>:</td><td><?php echo $row['gender'];?></td>
    </tr>
    <tr>
        <td>Qualification</td><td>:</td><td><?php echo $row['qualification'];?></td>
    </tr>
    <tr>
        <td>Mobile</td><td>:</td><td><?php echo $row['mobile'];?></td>
    </tr>
    
        <td>Username</td><td>:</td><td><?php echo $row['username'];?></td>
    </tr>
    <tr>
        <td>Password</td><td>:</td><td><?php echo $row['password'];?></td>
    </tr>
	<tr>
        <td>Assigned Batch</td><td>:</td><td><?php echo $row['assignedbatch'];?></td>
    
	<tr>
</table>
<?php
		}
?>
            
<br>
<a href="fac_editprofile.php">Edit Profile</a>
</form>
        </div>
	</div>
	</body>
</html>
		