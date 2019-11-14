<?php
 include"connect.php";
$r=mysqli_query($con,"select * from info");
if(mysqli_num_rows($r)<0)
{
	echo"Data not available";
}

?>
<html>
<body>
<table border="1">
<tr>
<td>Id</td>
<td>Name</td>
<td>City</td>
<td>Action</td>
</tr>
<?php
while($row=mysqli_fetch_assoc($r))
{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['city'];?></td>
<td><a href="editdata.php?id=<?php echo $row['id'];?>">Edit</a></td>
</tr>
<?php
}
?>
<tr>
</tr>
</table>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','test');
?>