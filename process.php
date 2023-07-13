<?php
include 'database.php';
if(isset($_POST['submit']))
{
	$Name=$_POST['fullname'];
	$Email=$_POST['email'];
	$Message=$_POST['message'];
	$chk="";
	$sql="insert into formdata(fullname,email,message) values('$Name','$Email','$Message')";
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('new record inserted')</script>";
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	mysqli_close($con);
}
?>