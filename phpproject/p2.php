<html>
<head>
ml</head>
<body>
<input type="text" placeholder="<h1>hello</h1>">
<form method="Post">
<input type="text" name="fname">
<input type="submit" name="save" value="save">
</form>
</body>
</html>
<?php
$a="satyajeet kumar 234 ";
$b=356;
echo var_dump($a);
echo "<br>";
echo var_dump($b);
echo "<br>";
$c=23.4;
echo var_dump($c);
echo "<br>";
if(isset($_POST['save']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	echo $fname,$lname;
echo "<br>";

?>
<