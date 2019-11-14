<?php
include"connect.php";
if(isset($_POST['save']))
{
	$name=$_POST['name'];
	$city=$_POST['city'];
	$add=$_POST['add'];
	$cont=$_POST['cont'];
	//$Eml=$_POST['Eml'];
	//how to insert data
	$q="insert into fisttablename(name,city,addreash,contect)values
	('$name','$city','$add','$cont')";
	
	$r=mysqli_query($con,$q);
	if(mysqli_affected_rows($con)>0)
	{
		echo"<script>alert('Successfully saved');</script>";
	}
	else
	{
		echo "Not Save";
	}
	
	//end of insertion
}
?>
<html>
<body>
 <div style="background-color:#808000; height:600px;">
 <a href="homepage.php" style="margin-left:300px;padding-top:50px;">vewpage</a>
 <a href="home1.php">home</a>
 <a href="serch.php">serch</a>
<a href="inquery.php">inquery</a>
 
 <h1 style="color:red ;">FOrm Save</h1>
<form method="post">
 <center> <i>name</i><input type="text" name="name" ></center>
<br>
 <center><i> city </i><input type="text" name="city"  >
 <br>
 <center><i> addreash</i><input type="text" name="add" ></center>
</center>
<br>
 <center><i> contect </i><input type="number" name="cont"></center>
 </center>
 <br>
 <center><i> Emailid </i><input type="email" name="Eml"></center>
 </center>
<br>
 <center><input type="submit" name="save1" value="submit"></center>
</form>
 <center><a href="homepage.php">VEWPAGE</a><br></center>
 <center><a href="home1.php">HOME</a><br></center>
 <center><a href="serch.php">SERCH</a><br></center>
<center><a href="inquery.php">inquery</a></center></div>
</body>
</html>