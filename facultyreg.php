<!DOCTYPE html>
<html>
	<head>
		<title>Faculty page</title>
		<link rel="stylesheet" href="css/style2.css">
				<style></style>
					</head>
				<body class="b">
			<div class="menubar">
		<ul>
	<li>Faculty Page</li>
			</ul>
				</div>
				
				<!-- content start -->
					<div class="cont">
			<center><font color="white">FACULTY SIGN UP</center></font><br>
				<form action="facultyreg2.php" method="POST">

					<h3>Factid:</h3>
						<input type="text" class="frm" name="faculty_id" placeholder="factid">
							<h3>Name:</h3>
								<input type="text" class="frm" name="name" placeholder="name">
							<h3>Address:</h3>
						<input type="text" class="frm" name="adress" placeholder="address">
					<h3>Dob:</h3>
				<input type="date" class="frm" name="dob" placeholder="dob" >
					<h3>Gender</h3>
						<p><input type="text" name="gender"placeholder="gender" class="frm">
								<br><h3>Qualification:</h3>
									<select input type="text" class="frm" name="qualification" placeholder="qualification">
								<option value="qualification"></option>	
							<option value="btech cs">BTECH-CS,MTECH-CS</option>
						<option value="bca">BCA,MCA</option>
				  <option value="BTECH EC">BTECH-EC,MTECH-EC</option>
							<option value="bsc cs">BSC-CS,MSC-CS</option>
								</select>
									<h3>Mobile:</h3>
										<input type="text" class="frm" name="mobile" placeholder="mobile">
							<h3>Username:</h3>
						<input type="text" class="frm" name="username" placeholder="username">
						<h3>Password:</h3>
						<input type="text" class="frm" name="password" placeholder="password">
						<h3>Assigned Batch:</h3>
							<select input type="text" class="frm" name="assignedbatch" placeholder="assigned batch">	
			                     <option value="assigned batch"></option>
			                         <option value="JSD1">JSD1</option>	
			                           <option value="JSD2">JSD2</option>				
                                          <option value="UI">UI</option>			
                                            <option value="ED">ED</option>			
                                           <option value="FS">FS</option>
                                        </select>
                                     <center><input type="submit" name="create" class="frm-btn" value="Submit"></center>
									</form>
							</div>
				<!-- content end -->
				<!-- footer start -->
								<footer>
									<div class="ft">
										<p>&copy;2018-2019 company inc, privacy terms</p>
											</div>
												</footer>
			   <!-- footer end -->
											</body>
                                       </html>