<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style4.css">
<title>homepage</title>
</head>
<body>
<div class="menubar">
<ul>
<li><a herf="#">Student Registration</li>
<li><a href="logout.php">Logout</li></a>
</ul>
</div>
<div class="dis">

<div class="cont">
<form action="studreg2.php" method= 'POST'> 
<h3 style="text-align:center">STUDENT REGISTRATION</h3><br>
<h3>STUDENT ID<input type="text" class="frm" placeholder="" name="stdid"></h3><br>
<h3>ADMISSION NO<input type="text" class="frm" placeholder="" name="admno"></h3><br>
<h3>NAME<input type="text" class="frm" placeholder="" name="name"></h3><br>
<h3>ADDRESS<input type="text" class="frm" placeholder="" name="address"></h3><br>
<h3>DOB<input type="date" class="frm" placeholder="" name="dob"></h3><br>
<h3><p>GENDER</p></h3><br>
<input type="radio"  name="gender" value="male"> Male
<input type="radio"  name="gender" value="female"> Female<br>
<br><h3>MOBILE<input type="text" class="frm" placeholder="" name="mobile"></h3><br>
<h3>ADMISSION DATE<input type="date" class="frm" placeholder="" name="admdate"></h3><br>
<h3>GUARDIAN<input type="text" class="frm" placeholder="" name="guardian"></h3><br>
<h3>BATCH<input type="text" class="frm" placeholder="" name="batch"></h3><br>
<h3>USERNAME<input type="text" class="frm" placeholder="" name="username"></h3><br>
<h3>PASSWORD<input type="password" class="frm" placeholder="" name="password"></h3><br>
<center><input type="submit"  class="frm-btn" value="send" name="create"></center>
</form>
</div>
</div>
<div class="ft">
<footer >
<p>&copy 2018-2019 company Inc</p>
</footer>
</div>
</body>
</html>

