
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
		<
        <div>
			<form>
				<?php
						require_once 'connect.php';
						session_start();
						$var=$_SESSION['faculty_id'];
						$sql="select * from stdmark";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			<h1><?php echo $row['name'];?></h1><br>
			
<table>

    <tr>
        
    </tr>
    <tr>
        <td>Stdid</td><td>:</td><td><?php echo $row['stdid'];?></td>
    </tr>
    <tr>
        <td>assno</td><td>:</td><td><?php echo $row['assno'];?></td>
    </tr>
    <tr>
        <td>sub1mark</td><td>:</td><td><?php echo $row['sub1mark'];?></td>
    </tr>
    <tr>
        <td>sub2mark</td><td>:</td><td><?php echo $row['sub2mark'];?></td>
    </tr>
    <tr>
        <td>sub3mark</td><td>:</td><td><?php echo $row['sub3mark'];?></td>
    </tr>
    
        <td>percentage</td><td>:</td><td><?php echo $row['percentage'];?></td>
    </tr>
		
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
		