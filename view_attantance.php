
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
			<form>
				<?php
						require_once 'connect.php';
						session_start();
						$var=$_SESSION['stdid'];
						$sql="select * from studattd";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			<h1><?php echo $row['name'];?></h1><br>
			
<table>

    <tr>
        
    </tr>
    <tr>
        <td>date</td><td>:</td><td><?php echo $row['date'];?></td>
    </tr>
	<tr>
        <td>stdid</td><td>:</td><td><?php echo $row['stdid'];?></td>
    </tr>
    <tr>
        <td>hr1status</td><td>:</td><td><?php echo $row['hr1status'];?></td>
    </tr>
    <tr>
        <td>hr2status</td><td>:</td><td><?php echo $row['hr2status'];?></td>
    </tr>
    
    <tr>
        <td>hr3status</td><td>:</td><td><?php echo $row['hr3status'];?></td>
    </tr>
    
        <td>hr4status</td><td>:</td><td><?php echo $row['hr4status'];?></td>
    </tr>
    
    
	<tr>
</table>
<?php
		}
?>
            
<br>
</form>
        </div>
	</div>
	</body>
</html>
		