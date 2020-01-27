<?php
$hostName = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'CSEB';
$conn=mysqli_connect($hostName, $username, $password, $databaseName);
if($conn)
{
	echo "Connection successful"."<br>";
}
else
{
	echo "Connection failed" + mysqli_connect_error();
}
if(isset($_POST['btn']))
{
	
	$name = $_POST['username'];
	$age = $_POST['age'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];

	$qy = "insert into users(name,age,contact,email)values('$name','$age','$contact','$email')";
	$qt = mysqli_query($conn,$qy);
	if($qt)
	{
		echo "<script>alert('registeration is complete')</script>";
		echo"<script>window.open('information.php','self')</script>";
	}
}
?>