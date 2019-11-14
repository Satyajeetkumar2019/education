<?php
include"connect.php";
$id=$_REQUEST['id'];
$r=mysqli_query($con,"select * from info where id='$id'");
$row=mysqli_fetch_assoc($r);
if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$city=$_POST['city'];
	
	$r2=mysqli_query($con,"update info set name='$name' ,city='$city' where id=
	'$id'");
	if(mysqli_affected_rows($con)>0)
	{
		echo"<script>alert('Data Successfulyy update');</script>";
		header('Location:viewdata.php');
	}
	else
		
		{
			echo"error occured";
		}
}
?>
<body>
<form method="post">
<input type="text" name="name"value="<?php echo $row['name']; ?>"><br><br>
<input type="text" name="city"value="<?php echo $row['city']; ?>"><br><br>
<input type="submit" name="update" value="update">
</form>
</body>