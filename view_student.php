<!DOCTYPE html>
<html>
	<head>
		<title>facultyhome</title>
		<link rel="stylesheet" href="css/style3.css">
		<style>
			table,td,th{border: 2px solid black;border-collapse: collapse; padding:10px;background-color: grey;text-align: center;}
		</style>  
	</head>
	<body class="bi">
		<div class="display">
		
		<div>
			<h1>STUDENT DETAILS</h1>
			<br><br>
			
			
			<table>
				<thead>
					<tr>
						<th>stdid</th>
						<th>admno</th>
						<th>name</th>
						<th>address</th>
						<th>dob</th>
						<th>gender</th>
						<th>mobile</th>
						<th>admdate</th>
						<th>guardian</th>
						<th>batch</th>
						<th>username</th>
						<th>password</th>
					</tr>

				</thead>
				<tbody>
					
					<?php
						require_once 'connect.php';
						$sql="select * from studreg";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $row['stdid'];?></td>
						<td><?php echo $row['admno'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['dob'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['mobile'];?></td>
						<td><?php echo $row['admdate'];?></td>
						<td><?php echo $row['guardian'];?></td>
						<td><?php echo $row['batch'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['password'];?></td>
					</tr>
						<?php
							}
						?>
						
				</tbody>
			</table>

		</div>
	
	</div>
	</body>
</html>
		