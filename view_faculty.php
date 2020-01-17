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
			<h1>FACULTY DETAILS</h1>
			<br><br>
			
			
			<table>
				<thead>
					<tr>
						<th>faculty_id</th>
						<th>name</th>
						<th>adress</th>
						<th>dob</th>
						<th>gender</th>
						<th>qualification</th>
						<th>mobile</th>
						<th>username</th>
						<th>password</th>
						<th>assignedbatch</th>
					</tr>

				</thead>
				<tbody>
					
					<?php
						require_once 'connect.php';
						$sql="select * from faculty";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $row['faculty_id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['adress'];?></td>
						<td><?php echo $row['dob'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['qualification'];?></td>
						<td><?php echo $row['mobile'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['password'];?></td>
						<td><?php echo $row['assignedbatch'];?></td>
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
		