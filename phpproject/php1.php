<html>
<head>
<title>
php form handling
</title>
</head>
<body>
<form method="Post">
<input type="text" name="fname">
<br>
<input type="text" name="lname">
<br>
<input type="submit" name="save" value="save">
</form>
</body>
</html>
<?php
if(isset($_POST['save']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	echo $fname,$lname;
echo "<br>";

}
?>